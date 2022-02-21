<?php
    require("./src/components/main/indexController.php"); 
?>

<link href="./src/components/main/bodyMain.css" rel="stylesheet" />
    
<div id="principalContainer" class="row">
        
    <div id="containerSecundary" class="col-md-7 container-fluid">
        <div id="formContainer" class="col-md-7">
            <h2 id="formTitle">SIMULE</h2>
                <form>
                    <div class="formInputContainer">
                        <label for="iptOrigem" class="formLabel">Origem:</label><br />
                        <select id="iptOrigem" onchange="calcula()"></select>
                    </div>
                    
                    <div class="formInputContainer">
                        <label for="iptDestino" class="formLabel">Destino:</label><br />
                        <select id="iptDestino" onchange="calcula()"></select>
                    </div>

                    <div class="formInputContainer">
                        <label for="inptMinutos" class="formLabel">Tempo <sup>(min)</sup>:</label><br />
                        <input type="number" min="1" id="inptMinutos" onchange="calcula()">
                    </div>

                    <div class="formInputContainer">
                        <label for="" class="formLabel">Plano:</label><br />
                        <select name="" id="iptPlano" onchange="calcula()">
                            <option value="FL30">FaleMais30</option>
                            <option value="FL60">FaleMais60</option>
                            <option value="FL120">FaleMais120</option>
                        </select>
                    </div>
                </form>
        </div>
        
        <div id="resultadoContainer" class="col-md-5">
            <span class="smallLegend">Com Plano FaleMais<span>30</span><br/></span>
            <div id="containerBigLegend" ><span class="bigLegend">R$30</span></div>
            <span class="smallLegend">Sem o plano FaleMais30</span><br/>
            <span class="medioLegend">R$50,00</span><br/>
        </div>
        
    </div>

</div>

<script>
    $(document).ready( () => {
        carregaOrigem()
        carregaDestino()
    })

    function calcula()
    {
        let origem  = $("#iptOrigem").val()
        let destino = $("#iptDestino").val()
        let tempo   = $("#inptMinutos").val()
        let plano   = $("#iptPlano").val()

        if( origem  != "" || origem  != null || origem  != undefined ||
            destino != "" || destino != null || destino != undefined ||
            tempo   != "" || tempo   != null || tempo   != undefined ||
            plano   != "" || plano   != null || plano   != undefined)
        {
            // Calcula
            
            // Mostra container do resultado
            $("#resultadoContainer").show("slow");
        }
    }

    function carregaOrigem()
    {
        let cidades = JSON.parse("<?php echo getCidades(); ?>")
        cidades.forEach( vlr => {
            $("#iptOrigem").append( `<option value="${vlr}">0${vlr}</option>` )
        });
    }
    function carregaDestino()
    {
        let cidades = JSON.parse("<?php echo getCidades(); ?>")
        cidades.forEach( vlr => {
            $("#iptDestino").append( `<option value="${vlr}">0${vlr}</option>` )
        });
    }
</script>