<div id="$Name" class="FMCompositeField <% if UseCheckbox %> FMCheckboxCompositeField<% end_if %> $extraClass">	
	<p class="trigger <% if StartOpen %>open<% end_if %>">
		<% if UseCheckbox %>$CheckboxField.Field<% end_if %>
		$Title
	</p>
	<div class="more-content">
	<% control FieldSet %>
	$FieldHolder
	<% end_control %>
	</div>
</div>