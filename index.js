    function ValidaForm() {
     if (document.Formulario.Nome.value==""){
        window.alert("Nome obrigatório");
        document.Formulario.Nome.focus();
        return false;
    }; 
     if (document.Formulario.sobrenome.value==""){
        window.alert("Sobrenome obrigatório");
        document.Formulario.sobrenome.focus();
        return false;
    } 
    document.Formulario.submit(); 
    //document.getElementsByName("Formulario").submit();
    //window.alert("dveria ter enviado....");
    }