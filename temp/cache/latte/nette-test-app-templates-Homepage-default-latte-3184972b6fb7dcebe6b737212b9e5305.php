<?php
// source: F:\xampp\htdocs\nette-test\app/templates/Homepage/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3674173557', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
echo $anyVariable;