<section class="if part1" id="if-section">
    <div class="content">
        <p class="text-justify" style="font-size: 12px;">Faça um algoritmo que determine se uma pessoa está Aprovada, Em Recuperação ou Reprovada na disciplina de algoritmos, de acordo com sua nota: <br>
            De 0 à 4,9 - Reprovado<br>
            De 5 à 6,9 - Em Recuperação<br>
            De 7 à 10 - Aprovado
        </p>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>float nota;</li>
                    <li>cout << “Digite a sua nota”;</li>
                    <li>cin >> nota; </li>
                    <li>if(
                        <span data-index="1" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="2" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="3" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="4" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="5" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="6" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="7" class="badge rounded-pill text-bg-purple fitting"></span>
                        ){
                    </li>
                    <ul>
                        <li> cout << “Aprovado”;</li>

                    </ul>
                    <li>}else if(
                        <span data-index="8" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="9" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="10" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="11" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="12" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="13" class="badge rounded-pill text-bg-purple fitting"></span><span data-index="14" class="badge rounded-pill text-bg-purple fitting"></span>
                        ){
                    </li>
                    <ul>
                        <li> cout << “Reprovado”;</li>
                    </ul>
                    <li>}else{</li>
                    <ul>
                        <li> cout << “Recuperação”;</li>
                    </ul>
                    <li>
                        }

                    </li>
                </ul>
            </div>
            <div class="col-md-6 row">
                <div class="col"> 
                    <span data-fit="or" class="badge rounded-pill mt-2 text-bg-purple piece">||</span>
                    <span data-fit="or" class="badge rounded-pill mt-2 text-bg-purple piece">||</span>
                    <span data-fit="4,11" class="badge rounded-pill mt-2 text-bg-purple piece">&&</span>
                    <span data-fit="4,11" class="badge rounded-pill mt-2 text-bg-purple piece">&&</span>
                    <span data-fit="1,5,8, 11" class="badge rounded-pill mt-2 text-bg-purple piece">nota</span>

                </div>
                <div class="col"> 
                    <span data-fit="10,14" class="badge rounded-pill mt-2 text-bg-purple piece">0</span>
                    <span data-fit="10,14" class="badge rounded-pill mt-2 text-bg-purple piece">4.9</span> 
                    <span data-fit="notin" class="badge rounded-pill mt-2 text-bg-purple piece">5</span>
                    <span data-fit="notin" class="badge rounded-pill mt-2 text-bg-purple piece">6.9</span>
                    <span data-fit="3,7" class="badge rounded-pill mt-2 text-bg-purple piece">7</span> 
                    <span data-fit="3,7" class="badge rounded-pill mt-2 text-bg-purple piece">10</span> 
                    <span data-fit="1,5,8, 11" class="badge rounded-pill mt-2 text-bg-purple piece">nota</span>
                </div>
                <div class="col">
                    <span data-fit="2,6, 9, 13" class="badge rounded-pill mt-2 text-bg-purple piece"><=</span>
                    <span data-fit="equal" class="badge rounded-pill mt-2 text-bg-purple piece">==</span> 
                    <span data-fit="diferent" class="badge rounded-pill mt-2 text-bg-purple piece">!=</span>
                    <span data-fit="2,6, 9, 13" class="badge rounded-pill mt-2 text-bg-purple piece">>=</span>
                    <span data-fit="plus" class="badge rounded-pill mt-2 text-bg-purple piece">></span> 
                    <span data-fit="less" class="badge rounded-pill mt-2 text-bg-purple piece"><</span> 
                    <span data-fit="1,5,8, 11" class="badge rounded-pill mt-2 text-bg-purple piece">nota</span>
                </div>
                <div class="col">
                    <span data-fit="2,6, 9, 13" class="badge rounded-pill mt-2 text-bg-purple piece"><=</span>
                    <span data-fit="equal" class="badge rounded-pill mt-2 text-bg-purple piece">==</span> 
                    <span data-fit="diferent" class="badge rounded-pill mt-2 text-bg-purple piece">!=</span>
                    <span data-fit="2,6, 9, 13" class="badge rounded-pill mt-2 text-bg-purple piece">>=</span>
                    <span data-fit="plus" class="badge rounded-pill mt-2 text-bg-purple piece">></span> 
                    <span data-fit="less" class="badge rounded-pill mt-2 text-bg-purple piece"><</span> 
                    <span data-fit="1,5,8, 11" class="badge rounded-pill mt-2 text-bg-purple piece">nota</span>
                </div>
            </div>
        </div>
    </div>


</section>