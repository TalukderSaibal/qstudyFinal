<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<div id="kkkk">

</div>

<script type='text/javascript' src='/JavaScriptSpellCheck/include.js' ></script>
<script type='text/javascript'>$Spelling.SpellCheckAsYouType('myTextArea')</script>
<textarea name="myTextArea"  id="myTextArea" cols="30" rows="4" style = 'max-width:500px;width:100%;height:200px;margin-bottom:20px'>
        This this is a simple exampl of Spell-checking As-You-Type using javascript spellcheck.
        It works in almost any browser, and supports upto 24 international languages.
        The button bellow shows an alternative way to spellcheck using javascript spellcheck - using a dialog iwndow!
</textarea>
<input type="button" value="Spell Check in a Dialog" onclick="$Spelling.SpellCheckInWindow('myTextArea')" />

</body>
</html>