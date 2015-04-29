<iframe
  width="100%"
  height="80%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBTk5dlrnD1zoGuX_QN5lcDrAD_UxUa52s
    &q={if isset($my_config) && $my_config}{$my_config}{else}Paris{/if}">
</iframe>
<div class="informations">
	<div>
		<div>
			<p><span>{l s='Adresse'}</span><br/>{if isset($my_config) && $my_config}{$my_config}{else}Paris{/if}</p>
		</div>
		<div>
			<p><span>{l s='Email'}</span><br/>{if isset($email) && $email}{$email}{else}email@gmail.com{/if}</p>
		</div>
		<div>
			<p><span>{l s='Phone'}</span><br/>{if isset($tel) && $tel}{$tel}{else}01 02 03 04 05{/if}</p>
		</div>
		<div>
			<p><span>{l s='Fax'}</span><br/>{if isset($fax) && $fax}{$fax}{else}01 02 03 04 05{/if}</p>
		</div>
	</div>
</div>