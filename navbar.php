<!-- Navbar fixed : navbar navbar-inverse navbar-fixed-top hidden-print -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <a class="navbar-brand" href="index.php"><img src="images/logo-example.jpg" style="height: 45px; border-radius: 100%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="back-office/logout.php" style="color: white;"><i cslass="fa fa-sign-out" aria-hidden="true"></i>  Se déconnecter</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="profile.php" style="color: white;"><i class="fa fa-user" aria-hidden="true"></i>  Mon espace de travail</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php" style="color: white; background-color: #c0392b;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>  Créer une séquence</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color: white;" data-toggle="modal" data-target="#Calculatrice"><i class="fa fa-calculator" aria-hidden="true"></i>  Calculatrice</a>
      </li>
    </ul>
  </div>
</nav>
<!-- Fin navbar fixed -->















<!-- Calculatrice -->





<style type="text/css">
  .calculatrice
{
        width:300px;
        height:300px;
        background-color:#eeeeee;
        border:2px solid #CCCCCC;
        margin:auto;
        padding-left:5px;
        padding-bottom:5px;
}
.calculatrice td
{
        height:16.66%;
}
.calc_td_resultat
{
        text-align:center;
}
.calc_resultat
{
        width:90%;
        text-align:right;
}
.calc_td_calculs
{
        text-align:center;
}
.calc_calculs
{
        width:90%;
        text-align:left;
}
.calc_td_btn
{
        width:25%;
        height:100%;
}
.calc_btn
{
        width:90%;
        height:90%;
        font-size:20px;
}
</style>




<script type="text/javascript" src="back-office/calculate.js"></script>
<div class="modal fade" id="Calculatrice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Utilisez la calculatrice</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="calculatrice" id="calc">
            <tr>
                <td colspan="4" class="calc_td_resultat">
                    <input type="text" readonly="readonly" name="calc_resultat" id="calc_resultat" class="calc_resultat" onkeydown="javascript:key_detect_calc('calc',event);" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="CE" onclick="javascript:f_calc('calc','ce');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&larr;" onclick="javascript:f_calc('calc','nbs');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="%" onclick="javascript:f_calc('calc','%');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="+" onclick="javascript:f_calc('calc','+');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="7" onclick="javascript:add_calc('calc',7);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="8" onclick="javascript:add_calc('calc',8);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="9" onclick="javascript:add_calc('calc',9);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="-" onclick="javascript:f_calc('calc','-');" />
                </td>
            </tr>
                        <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="4" onclick="javascript:add_calc('calc',4);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="5" onclick="javascript:add_calc('calc',5);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="6" onclick="javascript:add_calc('calc',6);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="x" onclick="javascript:f_calc('calc','*');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="1" onclick="javascript:add_calc('calc',1);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="2" onclick="javascript:add_calc('calc',2);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="3" onclick="javascript:add_calc('calc',3);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&divide;" onclick="javascript:f_calc('calc','/');" />
                </td>
            </tr>
            <tr>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="0" onclick="javascript:add_calc('calc',0);" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="&plusmn;" onclick="javascript:f_calc('calc','+-');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="," onclick="javascript:add_calc('calc','.');" />
                </td>
                <td class="calc_td_btn">
                        <input type="button" class="calc_btn" value="=" onclick="javascript:f_calc('calc','=');" />
                </td>
            </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #ff7675;">Fermer</button>
      </div>
    </div>
  </div>
</div>
        <script type="text/javascript">
                document.getElementById('calc').onload=initialiser_calc('calc');
        </script>

<!-- Fin calculatrice -->