<?php
// source: F:\xampp\htdocs\net\app/templates/Homepage/test.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9326775249', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb486b105248_content')) { function _lb486b105248_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>
<h1><?php echo Latte\Runtime\Filters::escapeHtml($title, ENT_NOQUOTES) ?></h2>
<?php echo Latte\Runtime\Filters::escapeHtml($id, ENT_NOQUOTES) ?>

<ul>
<?php $iterations = 0; foreach ($list as $li) { ?>	<li><?php echo Latte\Runtime\Filters::escapeHtml($li, ENT_NOQUOTES) ?></li>
<?php $iterations++; } ?>
</ul>

<?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbb7342a85c2_title')) { function _lbb7342a85c2_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1>Sign in</h1>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 