<?php

    session_start();
    setlocale(LC_ALL,'pt_BR.UTF8');
    mb_internal_encoding('UTF8'); 
    mb_regex_encoding('UTF8');
    date_default_timezone_set('America/Fortaleza');

    $aviso = $_SESSION["aviso"] ?? null;
    unset($_SESSION['aviso']);
?>


<html>
    <head>
        <title>Requerimento</title>
        <meta charset="utf-8" >
        <link rel="stylesheet" type="text/css" href="css/b.css">
    </head>
    <body>
        <div class="container">
        <header style="display: flex;">
            <div class="image" style="border-bottom: 2px solid red">
                <img src="IFCE.png" alt="IFCE logo" width="100px;">
            </div>
            <div class="content">
                <div class="head" style="padding-bottom: 15px;">
                    <h1>Instituto Federal</h1>
                    <p>Ceará</p>
                    <p>Campus Cedro</p>
                </div>
                <div class="end" style="padding-bottom: 15px;">
                    GUIA DE REQUERIMENTO
                </div>
            </div>
        </header>
        <p id="prot">Protocolo n.º <?=  $_SESSION['dado']['p'] ?? null ?>
        <?= $aviso ?>
        <form action="c.php" method="POST">
            <div>
                
                    <label>REQUERENTE <input type="text" name="reque" value="<?= $_SESSION['dado']['reque'] ?? null ?>"></label>
            </div>
            <div class="espaço">
                      <label>
                        DATA DE NASCIMENTO <input type="date" name="dt" value="<?= $_SESSION['dado']['dt'] ?? null ?>"> 
                        NATURALIDADE <input type="text" name="natural" value="<?= $_SESSION['dado']['natural'] ?? null ?>"> 
                        FILIAÇÃO <input type="text" name="filiacao" value="<?= $_SESSION['dado']['filiacao'] ?? null ?>">
                      </label>  
            </div>
            <div class="espaço">
                     <label>
                        CURSO <input type="text" name="curso" value="<?= $_SESSION['dado']['curso'] ?? null ?>"> 
                        PERIODO <input type="text" name="periodo" value="<?= $_SESSION['dado']['periodo'] ?? null ?>">
                        TURNO <input type="text" name="turno" value="<?= $_SESSION['dado']['turno'] ?? null ?>">
                    </label>    
                        
                        <label>
                        TELEFONE <input type="tel" name="telefone" value="<?= $_SESSION['dado']['telefone'] ?? null ?>"> | <input type="tel" name="telefone2">
                        EMAIL <input type="email" name="email" value="<?= $_SESSION['dado']['email'] ?? null ?>">
                       </label> 
            </div>
            ASSINALE:
                <table class="option">
                        <tr>
                            <td>
                                <input type="radio" value="documento" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'documento' ? "checked" : '' ?>>
                            </td>
                            <td>2° Via (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="tranc_disc" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'tranc_disc' ? "checked" : '' ?>>
                            </td>
                            <td>Trancamento de Disciplina (especificar)</td>
                            <td>Coordenação dos Cursos</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="aproveit" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'aproveit' ? "checked" : '' ?>>
                            </td>
                            <td>Aproveitamento da disciplina (anexar Historico escolar e Programa da Disciplina)</td>
                            <td style="border-right: 2px solid #000;">Coordenação de Cursos</td>
                            <td>
                                <input type="radio" value="tranc_mat" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'tranc_mat' ? "checked" : '' ?>>
                            </td>
                            <td>Trancamento de Matrícula (anexar documentação comprobatória)</td>
                            <td>Coordenação Pedagógica</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="prazo_mat" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'prazo_mat' ? "checked" : '' ?>>
                            </td>
                            <td>Matricula fora do prazo (justificar)</td>
                            <td style="border-right: 2px solid #000">CAA</td>
                            <td>
                                <input type="radio" value="transf" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'transf' ? "checked" : '' ?>>
                            </td>
                            <td>Transferência para outra instituição</td>
                            <td>CAA</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="cancel_mat" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'cancel_mat' ? "checked" : '' ?>>
                            </td>
                            <td>Cancelamento da Matricula</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="valida" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'valida' ? "checked" : '' ?>>
                            </td>
                            <td>Validação de Conhecimento (especificar)</td>
                            <td>Coordenação do Cursos</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="colacaograuesp" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'colacaograuesp' ? "checked" : '' ?>>
                            </td>
                            <td>Colação de Grau / Colação Especial(justificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="reajuste" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'reajuste' ? "checked" : '' ?>>
                            </td>
                            <td>Reajuste</td>
                            <td>CAA</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="declara" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'declara' ? "checked" : '' ?>>
                            </td>
                            <td>Declaração (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="reco_prova" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'reco_prova' ? "checked" : '' ?>>
                            </td>
                            <td>Recorreção de Prova</td>
                            <td>Coordenação do Curso</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="diploma" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'diploma' ? "checked" : '' ?>>
                            </td>
                            <td>Diploma (especificar)</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="aux_trasn" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'aux_trasn' ? "checked" : '' ?>>
                            </td>
                            <td>AUXÍLIO - Transporte</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="histesco" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'histesco' ? "checked" : '' ?>>
                            </td>
                            <td>Histórico Escolar</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="aux_mora" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'aux_mora' ? "checked" : '' ?>>
                            </td>
                            <td>AUXÍLIO - Moradia</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="reaber_mat" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'reaber_mat' ? "checked" : '' ?>>
                            </td>
                            <td>Reabertura de Matrícula</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="aux_ocu" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'aux_ocu' ? "checked" : '' ?>>
                            </td>
                            <td>AUXÍLIO - Óculos</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="seg_cham" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'seg_cham' ? "checked" : '' ?>>
                            </td>
                            <td>Segunda Chamada (anexar justificativa e especificar)</td>
                            <td style="border-right: 2px solid #000;">Coordenação do Curso</td>
                            <td>
                                <input type="radio" value="aux_pm" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'aux_pm' ? "checked" : '' ?>>
                            </td>
                            <td>AUXÍLIO - Pais e Mães</td>
                            <td>Serviço Social</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" value="reingreso" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'reingreso' ? "checked" : '' ?>>
                            </td>
                            <td>Reingresso</td>
                            <td style="border-right: 2px solid #000;">CAA</td>
                            <td>
                                <input type="radio" value="outros" name="alternativas" <?= isset($_SESSION['dado']['alternativas']) && $_SESSION['dado']['alternativas'] == 'outros' ? "checked" : '' ?>>
                            </td>
                            <td>Outros (especificar)</td>
                        </tr>
                    </table>
            <br>
            ESPECIFICAR: <br> <input type="text" name="especi"value="<?= $_SESSION['dado']['especi'] ?? null ?>"> <br>
            JUSTIFICAR: <br> <input type="text" name="justi" value="<?= $_SESSION['dado']['justi'] ?? null ?>"> <br>
            
             <br>
            <div class="modelagem">
                <h3>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h3>
                <div id="asis">
                    <label>
                    REQUERENTE (ASS. LEGÍVEL)
                    <input type="text" name="ass" value="<?= $_SESSION['dado']['ass'] ?? null ?>">  
 
                </label>

                <label>
                      
                    FUNCIONÁRIO (ASS. LEGÍVEL)
                    <input type="text" name="ass2" value="<?= $_SESSION['dado']['ass2'] ?? null ?>">
                </label>
                </div>
                
            </div>
                
                      
                     
            <br>
            <p id="visto1"> CEDRO - CE, <?= strftime('%A, %d de %B de %Y', strtotime('today')); ?>
            <br>
            <div class="visto2">
                    <div >
                        <div class="visto3">
                            <label id="visto4">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</label><br>
                            <input type="radio" name="arm" value="n" <?= isset($_SESSION['dado']['arm']) && $_SESSION['dado']['arm'] == 'n' ? "checked" : '' ?>>O requerente NÃO deve chave de armário<br>  
                            <input type="radio" name="arm" value="s" <?= isset($_SESSION['dado']['arm']) && $_SESSION['dado']['arm'] == 's' ? "checked" : '' ?>>O requerente deve chave do armário:
                            <input type="text" name="coae" class="asign" value="<?= $_SESSION['dado']['coae'] ?? null ?>">
                            <div class="visto5">
                                <div >
                                    <div>
                                        <input type="text" name="ass3" class="asign" value="<?= $_SESSION['dado']['ass3'] ?? null ?>">
                                        <br>
                                        <label>Responsável (ass. Legível)</label>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                        <div class="biblio">
                            <label>VISTO (BIBLIOTECA)</label><br>
                            <input type="radio" name="bibliot" value="n" <?= isset($_SESSION['dado']['bibliot']) && $_SESSION['dado']['bibliot'] == 'n' ? "checked" : '' ?>>O requerente NÃO deve livros na biblioteca<br>    
                            <input type="radio" name="bibliot" value="s" <?= isset($_SESSION['dado']['bibliot']) && $_SESSION['dado']['bibliot'] == 's' ? "checked" : '' ?>>O requerente deve livros na biblioteca:
                            <input type="text" name="bibli" class="asign" value="<?= $_SESSION['dado']['bibli'] ?? null ?>">
                            <div class="biblio2">
                                <div >
                                    <div>
                                        <input type="text" name="ass4" class="asign" value="<?= $_SESSION['dado']['ass4'] ?? null ?>">
                                        <br>
                                        <label>Responsável (ass. Legível)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    
                    <input type="submit" name="enviar" style="text-align: right; margin-top: 15px; padding: 15px">
                </div>
        </form>
    </div>
    </body>
<html>
<?php unset($_SESSION['dado']);?>