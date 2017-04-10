<section class="container-fluid">
    <div>
        <div class="well">
            <h4 style="text-align: center;">DONNEES MEDICALE</h4></br>
            <fieldset>

                <!-- type de diabète -->
                <div class="form-group">
                    <label class="col-lg-4 control-label">Type de diabète:</label>
                    <div class="col-lg-8">
                        <div class="radio">
                            <label>
                                <input type="radio" name="typediabete" id="dt1" value="DT1" checked="">
                                DT1
                            </label>&nbsp;&nbsp;&nbsp;<!-- 
                          </div>
                          <div class="radio"> -->
                            <label>
                                <input type="radio" name="typediabete" id="dt2" value="DT2">
                                DT2
                            </label>&nbsp;&nbsp;&nbsp;<!-- 
                          </div>
                          <div class="radio"> -->
                            <label>
                                <input type="radio" name="typediabete" id="gestationel" value="Gestationnel">
                                Gestationnel
                            </label><!-- 
                          </div> -->
                        </div>
                    </div></br></br></br>

                    <!-- Date de diagnostic -->
                    <div class="form-group">
                        <label for="datediagnostic" class="col-lg-4 control-label">Date de diagnostic:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control datepickerAll" name="datediagnostic" id="datediagnostic" placeholder="Date de diagnostic">
                        </div>
                    </div>

                    <!-- Circonstances de découverte -->
                    <div class="form-group">
                        <label for="circonstancedecouverte" class="col-lg-4 control-label">Circonstances de découverte:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="circonstancedecouverte" id="circonstancedecouverte" placeholder="Circonstances de découverte">
                        </div>
                    </div>

                    <!-- Antécédents familiaux -->
                    <div class="form-group">
                        <label for="antecedentfamiliaux" class="col-lg-4 control-label">Antécédents familiaux:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="antecedentfamiliaux" id="antecedentfamiliaux" placeholder="Antécédents familiaux">
                        </div>
                    </div>

                    <!-- Date de première mise sous pompe -->
                    <div class="form-group">
                        <label for="datepremieremisesouspompe" class="col-lg-4 control-label">Date de première mise sous pompe:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control datepickerAll" name="datepremieremisesouspompe" id="datepremieremisesouspompe" placeholder="Date de première mise sous pompe">
                        </div>
                    </div>

                    <!-- HbA1C de référence avant la mise sous pompe -->
                    <div class="form-group">
                        <label for="hba1c" class="col-lg-4 control-label">HbA1C de référence avant la mise sous pompe:</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="hba1c" id="hba1c" placeholder="HbA1C de référence avant la mise sous pompe (%)">
                        </div>
                    </div></br>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" style="color: white;">
                            <thead>
                            <th>Taille (cm)</th>
                            <th>Poids actuel (kg)</th>
                            <th>Poids de forme (kg)</th>
                            <th>IMC</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="number" class="form-control" name="taille" id="taille" placeholder=""></td>
                                    <td><input type="number" class="form-control" name="poidsactuel" id="poidsactuel" placeholder=""></td>
                                    <td><input type="number" class="form-control" name="poidsforme" id="poidsforme" placeholder=""></td>
                                    <td><input type="text" class="form-control" name="imc" id="imc" placeholder="" readonly></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

            </fieldset>	
        </div>

        <div class="well">

            <fieldset>
                <h4 style="text-align: center;">Auto surveillance glycémique</h4><br>
                <div class="form-group">
                    <label for="nombreglycemieparjour" class="col-lg-4 control-label">Nombre de glycémies par jour:</label>
                    <div class="col-lg-4">
                        <select class="form-control" name="nombreglycemieparjour" id="nombreglycemieparjour">						          
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                            <option value="61">61</option>
                            <option value="62">62</option>
                            <option value="63">63</option>
                            <option value="64">64</option>
                            <option value="65">65</option>
                            <option value="66">66</option>
                            <option value="67">67</option>
                            <option value="68">68</option>
                            <option value="69">69</option>
                            <option value="70">70</option>
                            <option value="71">71</option>
                            <option value="72">72</option>
                            <option value="73">73</option>
                            <option value="74">74</option>
                            <option value="75">75</option>
                            <option value="76">76</option>
                            <option value="77">77</option>
                            <option value="78">78</option>
                            <option value="79">79</option>
                            <option value="80">80</option>
                            <option value="81">81</option>
                            <option value="82">82</option>
                            <option value="83">83</option>
                            <option value="84">84</option>
                            <option value="85">85</option>
                            <option value="86">86</option>
                            <option value="87">87</option>
                            <option value="88">88</option>
                            <option value="89">89</option>
                            <option value="90">90</option>
                            <option value="91">91</option>
                            <option value="92">92</option>
                            <option value="93">93</option>
                            <option value="94">94</option>
                            <option value="95">95</option>
                            <option value="96">96</option>
                            <option value="97">97</option>
                            <option value="98">98</option>
                            <option value="99">99</option>
                            <option value="100">100</option>

                        </select>
                    </div>
                </div>


                <!-- type de lecteur && date de prescription-->
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="typelecteur" class="col-lg-4 control-label">Type de lecteur:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="typelecteur" id="typelecteur" placeholder="type de lecteur">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="dateprescription" class="col-lg-4 control-label">Date de prescription:</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control datepickerAll" name="dateprescription" id="dateprescription" placeholder="Date de prescription">
                        </div>
                    </div>
                </div>

                <!-- Stylo auto piqueur/lancette -->
                <div class="form-group">
                    <label for="styloautopiqueur" class="col-lg-4 control-label">Stylo auto piqueur/lancette:</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control" name="styloautopiqueur" id="styloautopiqueur" placeholder="Stylo auto piqueur/lancette">
                    </div>
                </div>
        </div>

        <div class="well">
            <h4 style="text-align: center;">Insulinothérapie</h4><br>
            <div class="form-group">
                <label for="nombreinjectionjour" class="col-lg-4 control-label">Nombre d’injection par jour:</label>
                <div class="col-lg-4">
                    <select class="form-control" name="nombreinjectionjour" id="nombreinjectionjour">						          
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select>
                </div>
            </div>


            <!-- Schéma multi-injection -->
            <div class="form-group">
                <h4 style="text-align: center;">Schéma multi-injection</h4>
<!--                 <div class="col-lg-8">
                    <input type="text" class="form-control" name="schemamultiinjection" id="schemamultiinjection" placeholder="Schéma multi-injection">
                </div> -->
            </div>

            <!-- Stylo && Autre &&  Aiguille pour stylo-->
            <div class="form-group">
                <div class="col-lg-3">
                    <label for="stylo" class="col-lg-3 control-label">Stylo:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="stylo" id="stylo" placeholder="Stylo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="autrestylo" class="col-lg-3 control-label">Autre:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="autrestylo" id="autrestylo" placeholder="Autre ">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="aiguillestylo" class="col-lg-3 control-label">Aiguille pour stylo:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="aiguillestylo" id="aiguillestylo" placeholder="Aiguille pour stylo">
                    </div>
                </div>
                <div class="col-lg-3">
                    <label for="autreaiguille" class="col-lg-3 control-label">Autre:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="autreaiguille" id="autreaiguille" placeholder="Autre ">
                    </div>
                </div>
            </div>
            </fieldset>	</br>

            <fieldset>
                <table class="table table-bordered table-hover" style="color: white;">
                    <thead>
                    <th style="text-align: center;"></th>
                    <th style="text-align: center;">Insuline lente (Ui)</th>
                    <th style="text-align: center;">Insuline rapide (Ui)</th><!-- 
                    <th style="text-align: center;">Quantité totale</th> -->
                    </thead>
                    <tbody>
                        <tr>
                            <td id="matin">Matin</td>
                            <td><input type="number" class="form-control" name="insulinelentematin" id="insulinelentematin" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidematin" id="insulinerapidematin" placeholder=""></td>
                           <!--  <td><input type="text" class="form-control" name="quantitetotal" readonly="" id="quantitetotal" placeholder=""></td> -->
                        </tr>
                        <tr>
                            <td id="midi">Midi</td>
                            <td><input type="number" class="form-control" name="insulinelentemidi" id="insulinelentemidi" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidemidi" id="insulinerapidemidi" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="soir">Soir</td>
                            <td><input type="number" class="form-control" name="insulinelentesoir" id="insulinelentesoir" placeholder=""></td>
                            <td><input type="number" class="form-control" name="insulinerapidesoir" id="insulinerapidesoir" placeholder=""></td>
                        </tr>
                        <tr>
                            <td id="total"><b>Total</b></td>
                            <td><input type="number" class="form-control" name="totalinsulinelente" readonly="" id="totalinsulinelente" placeholder=""></td>
                            <td><input type="number" class="form-control" name="totalinsulinerapide" readonly="" id="totalinsulinerapide" placeholder=""></td>
                        </tr>
                    </tbody>
                </table>

        </div>

        <div class="well">

            <h4>Traitement complémentaire :</h4><br>
            <table class="table table-bordered table-hover" style="color: white;">
                <thead>
                <th style="text-align: center;">Spécialité</th>
                <th style="text-align: center;">Posologie</th>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite1" id="specialite1"></td>
                        <td><input type="text" class="form-control" name="posologie1" id="posologie1"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite2" id="specialite2"></td>
                        <td><input type="text" class="form-control" name="posologie2" id="posologie2"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite3" id="specialite3"></td>
                        <td><input type="text" class="form-control" name="posologie3" id="posologie3"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="specialite4" id="specialite4"></td>
                        <td><input type="text" class="form-control" name="posologie4" id="posologie4"></td>
                    </tr>
                </tbody>
            </table>

            </fieldset>
        </div>

        <div class="well">
            <fieldset>
                <table class="table table-bordered table-hover table-responsive" style="color: white;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="12">Schémas basals date 1</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="3">Schémas 1 (ex: semaine)</td>
                            <td style="text-align: center;" colspan="3">Schémas 2 (ex: week-end)</td>
                            <td style="text-align: center;" colspan="3">Schémas 3</td>
                            <td style="text-align: center;" colspan="3">Schémas 4</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit (Ui/H) </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit1" id="Debit1"></td>
                            <td><input type="text" class="form-control" name="Horaire2" id="Horaire2" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit2" id="Debit2"></td>
                            <td><input type="text" class="form-control" name="Horaire3" id="Horaire3" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit3" id="Debit3"></td>
                            <td><input type="text" class="form-control" name="Horaire4" id="Horaire4" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit4" id="Debit4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="Horaire5" id="Horaire5" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit5" id="Debit5"></td>
                            <td><input type="text" class="form-control" name="Horaire6" id="Horaire6" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit6" id="Debit6"></td>
                            <td><input type="text" class="form-control" name="Horaire7" id="Horaire7" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit7" id="Debit7"></td>
                            <td><input type="text" class="form-control" name="Horaire8" id="Horaire8" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit8" id="Debit8"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="Horaire9" id="Horaire9" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit9" id="Debit9"></td>
                            <td><input type="text" class="form-control" name="Horaire10" id="Horaire10" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit10" id="Debit10"></td>
                            <td><input type="text" class="form-control" name="Horaire11" id="Horaire11" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit11" id="Debit11"></td>
                            <td><input type="text" class="form-control" name="Horaire12" id="Horaire12" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit12" id="Debit12"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="Horaire13" id="Horaire13" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit13" id="Debit13"></td>
                            <td><input type="text" class="form-control" name="Horaire14" id="Horaire14" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit14" id="Debit14"></td>
                            <td><input type="text" class="form-control" name="Horaire15" id="Horaire15" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit15" id="Debit15"></td>
                            <td><input type="text" class="form-control" name="Horaire16" id="Horaire16" value="00:00" readonly></td>
                            <td><input type="text" class="form-control" name="Horaire1" id="Horaire1" readonly value="23:59"></td>
                            <td><input type="number" class="form-control" name="Debit16" id="Debit16"></td>
                        </tr>
                    </tbody>
                </table></br></br>

                <!-- chart -->
                <div>
                    <!-- Row and col -->
                    <div class="row">

                        <div>
                            <h4>Histogrammes des débits suivant le Schémas basals date 1</h4>
                            <canvas id="bardate1" />
                        </div>

                    </div>
                </div>
                <!-- chart -->
                </br>

                <table class="table table-bordered table-hover  table-responsive" style="color: white;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="12">Schémas basals date 2</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;" colspan="3">Schémas 1 (ex: semaine)</td>
                            <td style="text-align: center;" colspan="3">Schémas 2 (ex: week-end)</td>
                            <td style="text-align: center;" colspan="3">Schémas 3</td>
                            <td style="text-align: center;" colspan="3">Schémas 4</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                            <td style="text-align: center;">De</td>
                            <td style="text-align: center;">A</td>
                            <td style="text-align: center;">Débit</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit21" id="Debit21"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire22" id="Horaire22"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit22" id="Debit22"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire23" id="Horaire23"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit23" id="Debit23"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire24" id="Horaire24"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit24" id="Debit24"></td>
                        </tr>
                        <tr>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire25" id="Horaire25"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit25" id="Debit25"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire26" id="Horaire26"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit26" id="Debit26"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire27" id="Horaire27"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit27" id="Debit27"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire28" id="Horaire28"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit28" id="Debit28"></td>
                        </tr>
                        <tr>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire29" id="Horaire29"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit29" id="Debit29"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire210" id="Horaire210"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit210" id="Debit210"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire211" id="Horaire211"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit211" id="Debit211"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire212" id="Horaire212"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit212" id="Debit212"></td>
                        </tr>
                        <tr>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire213" id="Horaire213"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit213" id="Debit213"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire214" id="Horaire214"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit214" id="Debit214"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire215" id="Horaire215"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit215" id="Debit215"></td>
                            <td><input type="text" readonly value="00:00"class="form-control" name="Horaire216" id="Horaire216"></td>
                            <td><input type="text" readonly value="23:59"class="form-control" name="Horaire21" id="Horaire21"></td>
                            <td><input type="text" class="form-control" name="Debit216" id="Debit216"></td>
                        </tr>
                    </tbody>
                </table>

                <!-- chart -->
                <div>
                    <!-- Row and col -->
                    <div class="row">

                        <div>
                            <h4>Histogrammes des débits suivant le Schémas basals date 2</h4>
                            <canvas id="bardate2" />
                        </div>

                    </div>
                </div>
                <!-- chart -->

            </fieldset>
        </div>

        </br>
        <div class="well table-responsive">
            <fieldset>
                <label for="Autre1" class="col-lg-5 control-label">Schéma des bolus</label>
                <label for="Autre1" class="col-lg-3 control-label">Date de MAJ :</label>
                </br>
                </br>
                <table class="table table-bordered table-hover" style="color: white;">
                    <thead>
                        <tr>
                            <td style="text-align: center;">Valeur glycémique</td>
                            <td style="text-align: center;">Matin (UI)</td>
                            <td style="text-align: center;">Midi (UI)</td>
                            <td style="text-align: center;">Collation (UI)</td>
                            <td style="text-align: center;">Soir (UI)</td>
                            <td style="text-align: center;">Autre (UI)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique1" id="ValGlycemique1"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin1" id="ValGlyMatin1"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid1" id="ValGlyMid1"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation1" id="ValGlyCollation1"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir1" id="ValGlySoir1"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre1" id="ValGlyAutre1"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique2" id="ValGlycemique2"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin2" id="ValGlyMatin2"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid2" id="ValGlyMid2"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation2" id="ValGlyCollation2"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir2" id="ValGlySoir2"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre2" id="ValGlyAutre2"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique3" id="ValGlycemique3"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin3" id="ValGlyMatin3"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid3" id="ValGlyMid3"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation3" id="ValGlyCollation3"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir3" id="ValGlySoir3"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre3" id="ValGlyAutre3"></td>
                        </tr> 
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique4" id="ValGlycemique4"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin4" id="ValGlyMatin4"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid4" id="ValGlyMid4"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation4" id="ValGlyCollation4"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir4" id="ValGlySoir4"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre4" id="ValGlyAutre4"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique5" id="ValGlycemique5"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin5" id="ValGlyMatin5"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid5" id="ValGlyMid5"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation5" id="ValGlyCollation5"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir5" id="ValGlySoir5"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre5" id="ValGlyAutre5"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique6" id="ValGlycemique6"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin6" id="ValGlyMatin6"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid6" id="ValGlyMid6"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation6" id="ValGlyCollation6"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir6" id=""></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre6" id="ValGlyAutre6"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="ValGlycemique7" id="ValGlycemique7"></td>
                            <td><input type="text" class="form-control" name="ValGlyMatin7" id="ValGlyMatin7"></td>
                            <td><input type="text" class="form-control" name="ValGlyMid7" id="ValGlyMid7"></td>
                            <td><input type="text" class="form-control" name="ValGlyCollation7" id="ValGlyCollation7"></td>
                            <td><input type="text" class="form-control" name="ValGlySoir7" id="ValGlySoir7"></td>
                            <td><input type="text" class="form-control" name="ValGlyAutre7" id="ValGlyAutre7"></td>
                        </tr>
                    </tbody>
                </table>

                <div class="form-group">
                    <label for="synthesecommentqire" class="col-lg-3 control-label">Synthèse/Commentaires :</label>
                    <div class="col-lg-9">
                        <textarea rows="5" cols="1" class="form-control" id="synthesecommentqire" placeholder="Synthèse/Commentaires"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="objectifglycemiquepreprandial" class="col-lg-5 control-label">Objectif glycémique pré prandial (g/l) :</label>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="objectifglycemiquepreprandial" name="objectifglycemiquepreprandial" placeholder="(g/l)">
                    </div>
                    <label for="objectifglycemiquepostprandial" class="col-lg-5 control-label">Objectif glycémique post prandial (g/l) :</label>
                    <div class="col-lg-1">
                        <input type="text" class="form-control" id="objectifglycemiquepostprandial" name="objectifglycemiquepostprandial" placeholder="(g/l)">
                    </div>
                </div>
            </fieldset>
        </div>
        </br>
        <div class="well table-responsive">
            <fieldset>

                <label for="Autre1" class="col-lg-7 control-label">Hémoglobine glyquée</label>
                </br>
                </br>
                <table class="table table-bordered table-hover" style="color: white;">
                    <tbody>
                        <tr>
                            <th scope="row">Dates</th>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc1" id="ValDatesHemGlyc1"></td>
                            <td><input type="date" class="form-control datepickerAll" name="ValDatesHemGlyc2" id="ValDatesHemGlyc2"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc3" id="ValDatesHemGlyc3"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc4" id="ValDatesHemGlyc4"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc5" id="ValDatesHemGlyc5"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc6" id="ValDatesHemGlyc6"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc7" id="ValDatesHemGlyc7"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc8" id="ValDatesHemGlyc8"></td>
                            <td><input type="text" class="form-control datepickerAll" name="ValDatesHemGlyc9" id="ValDatesHemGlyc9"></td>
                        </tr>
                        <tr>
                            <th scope="row">HbA1c(%)</th>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc1" id="ValHbA1cHemGlyc1"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc2" id="ValHbA1cHemGlyc2"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc3" id="ValHbA1cHemGlyc3"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc4" id="ValHbA1cHemGlyc4"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc5" id="ValHbA1cHemGlyc5"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc6" id="ValHbA1cHemGlyc6"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc7" id="ValHbA1cHemGlyc7"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc8" id="ValHbA1cHemGlyc8"></td>
                            <td><input type="text" class="form-control" name="ValHbA1cHemGlyc9" id="ValHbA1cHemGlyc9"></td>
                        </tr>
                    </tbody>
                </table>

                <div>
                    <!-- chart -->
                    <div>
                        <!-- Row and col -->
                        <div class="row">

                            <div>
                                <h4>Evolution chronologique en % desHémoglobines glyquées</h4>
                                <canvas id="barhg" />
                            </div>

                        </div>
                    </div>
                    <!-- chart -->
                </div>

            </fieldset>

        </div>
        <!-- 
            <div class="form-group hidden">
                <div class="col-lg-10 col-lg-offset-2">
                    <button type="submit" class="btn btn-success" id="etape2">Envoyer</button>
                </div>
            </div> 
        -->

    </div>	
</section>
<script type="text/javascript">

    $("#taille").blur(function() {

        var poids = ($('#poidsactuel').val()) ? $('#poidsactuel').val() : 0;

        var taille = ($('#taille').val()) ? $('#taille').val() : 0;

        var imcPT = (parseInt(poids) / ((parseInt(taille)*0.01)*(parseInt(taille)*0.01)));
        $('#imc').val(imcPT);
    });

        $("#poidsactuel").change(function() {

        var poids = ($('#poidsactuel').val()) ? $('#poidsactuel').val() : 0;

        var taille = ($('#taille').val()) ? $('#taille').val() : 0;

        var imcPT = (parseInt(poids) / ((parseInt(taille)*0.01)*(parseInt(taille)*0.01)));
        $('#imc').val(imcPT);
    });

</script>
