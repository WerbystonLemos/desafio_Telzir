<link href="./src/components/main/bodyMain.css" rel="stylesheet" />

<div id="principalContainer" class="row">

    <div id="containerSecundary" class="col-md-7 container-fluid">
        <div id="formContainer" class="col-md-7">
            <h2 id="formTitle">SIMULE</h2>
            <!-- <div> -->
                <form>
                    <div class="formInputContainer">
                        <label for="" class="formLabel">Origem:</label><br />
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="formInputContainer">
                        <label for="" class="formLabel">Destino:</label><br />
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>

                    <div class="formInputContainer">
                        <label for="" class="formLabel">Tempo <sup>(min)</sup>:</label><br />
                        <input type="number">
                    </div>

                    <div class="formInputContainer">
                        <label for="" class="formLabel">Plano:</label><br />
                        <select name="" id="">
                            <option value="FL30">FaleMais30</option>
                            <option value="FL60">FaleMais60</option>
                            <option value="FL120">FaleMais120</option>
                        </select>
                    </div>
                </form>
            <!-- </div> -->
        </div>
        
        <div id="resultadoContainer" class="col-md-5">
            <span class="smallLegend">Com Plano FaleMais<span>30</span><br/></span>
            <div id="containerBigLegend" ><span class="bigLegend">R$30</span></div>
            <span class="smallLegend">Sem o plano FaleMais30</span><br/>
            <span class="medioLegend">R$50,00</span><br/>
        </div>
        
    </div>

</div>