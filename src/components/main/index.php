<?php
    require("./src/components/main/indexController.php"); 
?>

<link href="./src/components/main/bodyMain.css" rel="stylesheet" />
    
        
<div id="containerSecundary" class="">

    <div class="col-md-4"></div>
    
    <div id="resultadoContainer" class="col-md-4">
        <p id="txt_secao1">
            <span id="txt_conheca">Conheça o </span><br/>
            <b id="txt_faleMais">FaleMais</b>!
        </p>
        <p id="txt_secao2">
            Escolha seu plano FaleMais e fale de
            <b>GRAÇA</b> até um determinado tempo,
            pague apenas os minutos excedentes
            com acréscimo de 10% sobre
            a tarifa do minuto.
        </p>
        <div id="containerValores">
            <span class="smallLegend">Com Plano FaleMais<span>30</span><br/></span>
            <div id="containerBigLegend" ><span class="bigLegend">R$30</span></div>
            <span class="smallLegend">Sem o plano</span><br/>
            <span class="medioLegend">R$50,00</span><br/>
        </div>
    </div>
    
    <div id="formContainer" class="col-md-4">
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
                <label for="iptPlano" class="formLabel">Plano:</label><br />
                <select id="iptPlano" onchange="calcula()"></select>
            </div>
        </form>
    </div>
    
</div>


<script>
    $(document).ready( () => {
        carregaOrigem()
        carregaDestino()
        getPlanos()
    })

    function calcula()
    {
        let origem  = $("#iptOrigem").val()
        let destino = $("#iptDestino").val()
        let tempo   = $("#inptMinutos").val()
        let plano   = $("#iptPlano").val()

        if( origem  != "" && origem  != null && origem  != undefined &&
            destino != "" && destino != null && destino != undefined &&
            tempo   != "" && tempo   != null && tempo   != undefined &&
            plano   != "" && plano   != null && plano   != undefined)
        {
            // calcula valores
            carregaValoresPlanos(plano, origem, destino, tempo)
            
            // Mostra container do resultado
            $("#containerValores").show("slow");
        }
        else
        {
            $("#containerValores").hide("slow");
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

    function getPlanos()
    {
        let planos = "<?php echo getPlanos() ?>";
        planos = JSON.parse(planos)
        planos.forEach( elemento => {
            $("#iptPlano").append( `<option value="FL${elemento}">FaleMais${elemento}</option>` )
        })
    }

    function carregaValoresPlanos(plano, origem, destino, tempo)
    {
        let res = <?php echo getVlrPlano(); ?>;
        console.log( (res) )
        // comPlano: 167.2
        // destino: 11
        // origem: 18
        // plano: 120
        // semPlano: 380
        // tempo: 200
    }

</script>