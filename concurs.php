<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php';?>
    <?php include 'ext/db/db.php';?>
</head>


<body >
<?php include 'menu.php';?>



<div id="br_concurs_noutati" class="container" role="main">
    <div class="jumbotron">
        <!--p><a href="./arhiva/iasi2016.xls" target="_blank">Rezultate 2016</a></p-->
        <p>Bridge Club Iasi va invita la Memorialul "Emil Alexandrescu", editia a XXVII-a, care va avea loc in perioada 13 Aprilie - 15 Aprilie 2018 la Hotel Ciric, sub patronajul Federatiei Romane de Bridge.</p>

        <p>&nbsp;</p>
        <div id="br_concurs_info" class="well" style="display: block; text-align: center">
            <div class="row">
                <div class="col-md-3">
                    </br><a href="#br_concurs_details_info" data-toggle="collapse"><i class="fa fa-info fa-lg"> Informatii concurs </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br> <a  data-toggle="modal" href="#" data-target="#form-content"><i class="fa fa-bed fa-lg"> Rezervari cazare </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br> <a href="#" data-toggle="modal" data-target="#form-perechi"><i class="fa fa-user-plus fa-lg"> Inscrieri perechi </i></a></br></br>
                </div>
                <div class="col-md-3">
                    </br><a href="#" data-toggle="modal" data-target="#form-echipe"><i class="fa fa-users fa-lg"> Inscrieri echipe </i></a></br></br>
                </div>
            </div>

        </div>
        <div class="row">
            <div id="thanks"></div>
        </div>
    </div>

            <div id="br_concurs_details_info" class="collapse well">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-info"  style="text-align: center">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-info fa-lg"> Program </i></h3>
                            </div>
                            <div class="panel-body">
                                <b>Vineri,  13 Aprilie</b></br>15.55 - Perechi Open - Sesiunea I</br>20.30 - Perechi Open - Sesiunea II</br></br>
                                <b>Sambata, 14 Aprilie</b></br>9.45 - Echipe Danez - Rundele I-IV</br>15.45 - Echipe Danez - Rundele V-VIII</br>
                                    21.00 - Cina festiva oferita de organizator</br></br>
                                <b>Duminica, 15 Aprilie</b></br>11.00 - Echipe Danez rundele 9-11 divizia B si divizia C</br>
                                10.00 - Echipe Danez Semifinale divizia A - loc I cu loc IV ; loc II cu loc III</br>
                                - Finala mare: invingatoarele din semifinale
                                - Finala mica: invinsele din semifinale
                                - Semifinalele si finalele = meciuri de 12 done
                                </br>13.30 - Festivitatea de premiere</br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-info"  style="text-align: center">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-trophy fa-lg"> Premii </i></h3>
                            </div>
                            <div class="panel-body">
                                <b>Open</b></br>I - 2400 RON + Cupe</br>II - 1400 RON + Cupe</br>III - 1000 RON + Cupe</br>IV - 700 RON</br>V - 500 RON</br>VI - 300 RON</br></br>
                                <b>Echipe</b></br>IA - 4000 RON + Cupe</br>IIA - 2200 RON + Cupe</br>IIIA - 1000 RON + Cupe</br>IVA - 800 RON</br>IB - 700 RON</br>IIB - 500 RON</br>IC - 500 RON</br></br>
                                <b>Premii speciale</b></br>Loc 1 tur 2 nepremiat - 300 RON</br>Cea mai bine clasata axa ieseana nepremiata - 250 RON</br></br>
                                <b>Premiile nu sunt conditionate de numarul de participanti!</b>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="panel panel-info"  style="text-align: center">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-sign-in fa-lg"> Taxe concurs </i></h3>
                            </div>
                            <div class="panel-body">
                                <b>Perechi Open</b> 160 RON / axa</br></br>
                                <b>Echipe Danez</b> 400 RON / echipa</br></br>
                                <b>10 lei/jucator taxa speciala</b></br></br>
                                <i>Juniorii si pensionarii beneficiaza de 50% reducere la inscriere!</i></br></br>

                            </div>
                        </div>

                        <div class="panel panel-info"  style="text-align: left">
                            <div class="panel-body">
                                <p>Inscrierile se fac telefonic la numarul <a href="tel:0722375885">0722 375 885</a> până la data de 12.04.2018 sau online la <a href="http://bridge-iasi.club/concurs.php" target="_new">http://bridge-iasi.club/</a>
                                </p>
                                <p>Confirmarile se sisteaza cu 60 de minute inainte de inceperea
                                    fiecarui concurs.
                                </p>
                                <p>La concursul Perechi OPEN se vor folosi done predistribuite.
                                </p>
                                <p>In sala de concurs, FUMATUL ESTE INTERZIS !
                                </p>
                                <p>Manager Turneu: Romeo Olteanu</br>
                                    Director Turneu: Razvan Spiridonescu</br>
                                    Arbitru: Adrian Craciun</br>
                                    Arbitru: Carol Gergely
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>




<div id="form-content" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="form-content" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Rezervare cazare</h3>
            </div>
            <div class="modal-body">
                <form id="contact" name="contact" data-toggle="validator" role="form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="name">Nume</label></br>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Stefan Ionescu" required="true" data-disable="false">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="email">E-mail</label></br>
                            <input type="email" name="email" class="form-control" required="true" placeholder="stefan@bridge.com" required="true" data-error="E-mail-ul nu este valid!">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="telefon">Telefon</label></br>
                            <input type="text" name="telefon" class="form-control" required="true"><br></br>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="datepicker">Perioada</label><br>
                            <div class="input-daterange input-group" id="datepicker" required="true">
                                <input type="text" class="input-sm form-control" name="start" required="true"/>
                                <span class="input-group-addon"> - </span>
                                <input type="text" class="input-sm form-control" name="stop" required="true"/>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="message">Optiuni cazare</label></br>
                            <select name="optiunecazare" class="form-control" required="true">

                                <?php
                                    try {
                                        $datas = $database->select("optiunicazare", "*");
                                        foreach ($datas as $data) {
                                            echo "<option value=\"" . $data['ID'] . "\">" . $data['Hotel'] . " - " . $data['Camera'] . " (" . $data['Pret'] . " " . $data['Valuta'] . ") </option>";
                                        }
                                    }
                                    catch(Exception $e){
                                        echo "<option>No DB connection!</option>";
                                    }

                                ?>

                            </select>
                            </br>
                        </div>

                    </div>

            </div>
            <div class="modal-footer form-group">
                <input class="btn btn-success" type="submit" value="Trimite" id="trimite">
                <a href="#" class="btn" data-dismiss="modal">Inchide</a>
            </div>
            </form>
        </div>
    </div>
</div>



<div id="form-perechi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="form-perechi" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Inscrieri perechi</h3>
            </div>
            <div class="modal-body">
                <form id="perechi" name="perechi" data-toggle="validator" role="form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator1">Jucator 1</label></br>
                            <input type="text" name="jucator1" id="jucator1" class="form-control" placeholder="Stefan Ionescu" required="true" data-disable="false">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator2">Jucator 2</label></br>
                            <input type="text" name="jucator2" class="form-control"  placeholder="George Popescu" required="true"><br></br>
                        </div>

                        <div class="col-md-12 form-group">
                            <label class="control-label" for="email">E-mail contact</label></br>
                            <input type="email" name="email" class="form-control" required="true" placeholder="stefan@bridge.com" required="true" data-error="E-mail-ul nu este valid!">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

            </div>
            <div class="modal-footer form-group">
                <input class="btn btn-success" type="submit" value="Trimite" id="trimite">
                <a href="#" class="btn" data-dismiss="modal">Inchide</a>
            </div>
            </form>
        </div>
    </div>
</div>


<div id="form-echipe" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="form-echipe" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Inscrieri echipe</h3>
            </div>
            <div class="modal-body">
                <form id="echipe" name="echipe" data-toggle="validator" role="form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator1">Jucator 1</label></br>
                            <input type="text" name="jucator1" id="jucator1" class="form-control" placeholder="Stefan Ionescu" required="true" data-disable="false">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator2">Jucator 2</label></br>
                            <input type="text" name="jucator2" class="form-control"  placeholder="George Popescu" required="true"><br></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator3">Jucator 3</label></br>
                            <input type="text" name="jucator3" id="jucator3" class="form-control" placeholder="Ion Georgescu" required="true" data-disable="false">
                        </div>

                        <div class="col-md-6 form-group">
                            <label class="control-label" for="jucator4">Jucator 4</label></br>
                            <input type="text" name="jucator4" class="form-control"  placeholder="Vasile Craioveanu" required="true"><br></br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="email">E-mail contact</label></br>
                            <input type="email" name="email" class="form-control" required="true" placeholder="stefan@bridge.com" required="true" data-error="E-mail-ul nu este valid!">
                            <div class="help-block with-errors"></div>
                        </div>

                    </div>

            </div>
            <div class="modal-footer form-group">
                <input class="btn btn-success" type="submit" value="Trimite" id="trimite">
                <a href="#" class="btn" data-dismiss="modal">Inchide</a>
            </div>
            </form>
        </div>
    </div>
</div>


<?php include 'footer.php';?>

</body>
</html>
