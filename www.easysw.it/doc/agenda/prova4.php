
<html>

<head>
<meta http-equiv="Content-Language" content="it">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>memorizza socio</title>
</head>
<style>
@import url(https://fonts.googleapis.com/css?family=Audiowide);
html {
   box-sizing: border-box;
   font-family: Arial, sans-serif;
   font-size: 16px;
   font-weight: normal;
}

*,
*:before,
*:after {
   box-sizing: inherit;
}

html,
body {
   height: 100%;
   margin: 0;
   padding: 0;
   width: 100%;
}

span {
   color: #e91e63;
   font-family: monospace;
   white-space: nowrap;
}

span:after {
   font-family: Arial, sans-serif;
   text-align: left;
   white-space: normal;
}

span:focus {
   outline: none;
}

.wrap {
   background: #ECF0F1;
   color: #607D8B;
   height: 100%;
   overflow: auto;
   padding: 1em 2.5em;
   text-align: center;
   width: 100%;
}



pre {
   background: #fff;
   display: inline-block;
   font-size: .55em;
   margin-top: 2em;
   padding: 1em;
}

@media (min-width: 360px) {
   pre {
      font-size: .7em;
   }
}

@media (min-width: 500px) {
   pre {
      font-size: 1em;
   }
}


/*== start of code for tooltips ==*/
.tool {
    cursor: help;
    position: relative;
}


/*== common styles for both parts of tool tip ==*/
.tool::before,
.tool::after {
    left: 50%;
    opacity: 0;
    position: absolute;
    z-index: -100;
}

.tool:hover::before,
.tool:focus::before,
.tool:hover::after,
.tool:focus::after {
    opacity: 1;
    transform: scale(1) translateY(0);
    z-index: 100; 
}


/*== pointer tip ==*/
.tool::before {
    border-style: solid;
    border-width: 1em 0.75em 0 0.75em;
    border-color: #3E474F transparent transparent transparent;
    bottom: 100%;
    content: "";
    margin-left: -0.5em;
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26), opacity .65s .5s;
    transform:  scale(.6) translateY(-90%);
} 

.tool:hover::before,
.tool:focus::before {
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
}


/*== speech bubble ==*/
.tool::after {
    background: #3E474F;
    border-radius: .25em;
    bottom: 180%;
    color: #EDEFF0;
    content: attr(data-tip);
    margin-left: -8.75em;
    padding: 1em;
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26) .2s;
    transform:  scale(.6) translateY(50%);  
    width: 17.5em;
}

.tool:hover::after,
.tool:focus::after  {
    transition: all .65s cubic-bezier(.84,-0.18,.31,1.26);
}

@media (max-width: 760px) {
  .tool::after { 
        font-size: .75em;
        margin-left: -5em;
        width: 10em; 
  }
}

</style>
<script type="text/javascript">
		
		function controllo(){ 
            with(document.modulo) { 
        if(importoass.value=="") { 
            alert("Error: manca IMPORTO ASSOCIATIVO"); 
            importoass.focus(); 
            return false; 
                            } 
					                                                            
                                                            
                                  } 
        } 
</script>
</head>

<body>
<div class="wrap">
   <p> <span class="tool" data-tip="By adding this class you can provide almost any element with a tool tip." tabindex="1">tool</span>  
   
</div>

</body>

</html>