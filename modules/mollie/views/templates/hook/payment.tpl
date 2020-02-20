{**
* Copyright (c) 2012-2019, Mollie B.V.
* All rights reserved.
*
* Redistribution and use in source and binary forms, with or without
* modification, are permitted provided that the following conditions are met:
*
* - Redistributions of source code must retain the above copyright notice,
*    this list of conditions and the following disclaimer.
* - Redistributions in binary form must reproduce the above copyright
*    notice, this list of conditions and the following disclaimer in the
*    documentation and/or other materials provided with the distribution.
*
* THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND ANY
* EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
* WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
* DISCLAIMED. IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE FOR ANY
* DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
* (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
* SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
* CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
* LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
* OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH
* DAMAGE.
*
* @author     Mollie B.V. <info@mollie.nl>
* @copyright  Mollie B.V.
* @license    Berkeley Software Distribution License (BSD-License 2) http://www.opensource.org/licenses/bsd-license.php
* @category   Mollie
* @package    Mollie
* @link       https://www.mollie.nl
*}
{if $warning != ''}
  <p class="payment_module" style="color:red;">{$warning|escape:'htmlall':'UTF-8'}</p>
{/if}

<div class="mollie_methods">
  {foreach $methods as $method}
    <p class="payment_module">
      <a href="{$link->getModuleLink('mollie', 'payment', ['method' => $method['id'], 'rand' => time()], true)|escape:'htmlall':'UTF-8'}"
         title="{$msg_pay_with|sprintf:$method['name']|escape:'htmlall':'UTF-8'}"
         id="mollie_link_{$method['id']|escape:'htmlall':'UTF-8'}"
         class="mollie_method"
      >
        {if isset($method['image']) && $images !== 'hide'}
          {if $images === 'big'}
            <img class="mollie_image_big" src="{$method['image']['svg']|escape:'htmlall':'UTF-8'}"{if !empty($method['image']['size2x'])} onerror="this.src = '{$method['image']['size2x']|escape:'javascript':'UTF-8'}"{/if} alt="{$method['name']|escape:'htmlall':'UTF-8'}'">
          {else}
            <img class="mollie_image" src="{$method['image']['svg']|escape:'htmlall':'UTF-8'}"{if !empty($method['image']['size1x'])} onerror="this.src = '{$method['image']['size2x']|escape:'javascript':'UTF-8'}'"{/if} alt="{$method['name']|escape:'htmlall':'UTF-8'}">
          {/if}
        {else}
          <span class="mollie_margin"> &nbsp;</span>
        {/if}
        {$module->lang($method['name'])|escape:'htmlall':'UTF-8'}
      </a>
    </p>
  {/foreach}
</div>

{include file="./init_urls.tpl"}

{if !empty($issuers['ideal']) && $issuer_setting === Mollie::ISSUERS_ON_CLICK}
  <script type="text/javascript">
    (function initMollieBanks() {
      if (typeof window.MollieModule === 'undefined'
        || typeof window.MollieModule.app === 'undefined'
        || typeof window.MollieModule.app.default === 'undefined'
        || typeof window.MollieModule.app.default.bankList === 'undefined'
      ) {
        {Mollie::getWebpackChunks('app')|json_encode}.forEach(function (chunk) {
          var elem = document.createElement('script');
          elem.type = 'text/javascript';
          document.querySelector('head').appendChild(elem);
          elem.src = chunk;
        });

        return setTimeout(initMollieBanks, 100);
      }
      // Preload
      window.MollieModule.app.default.bankList();

      function showBanks(event) {
        event.preventDefault();
        var banks = {$issuers['ideal']|json_encode};
        var translations = {$mollie_translations|json_encode};
        window.MollieModule.app.default.bankList().then(function (fn) {
          fn.default(banks, translations);
        });
      }

      var idealBtn = document.getElementById('mollie_link_ideal');
      if (idealBtn != null) {
        idealBtn.onclick = showBanks;
      }
    }());
  </script>
{/if}
