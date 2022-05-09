<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once('autoload.php');
    /**
     * 
     */
    class Reservation
    {
      public $req;
      public $id;
      public $DateAndTime;
      public $bdd;
      public $donnees;
      public $dates;
      public $datess;
      public $valeur;
      public $valuesss;
      public $indesirables;
      public $value;
      public $values;
      public $pos;
      public $name;
      public $number;
      public $mail;
      public $place;
      public $exec;
      public $dateUser;
      public $datesTime;
      public $datessTime;
      public $timeUser; 
      public $dateTimeUser;
      public $person;
      public $dateDispo;
      public $tabExtension;


      public function __construct(){
        $this->bdd = new Bdd;
      }
      
      
      public function getDonnées(){
      $this->DateAndTime = date('Y-m-d h:i:s a', time());
      $this->req = $this->bdd->getPdo()->query("SELECT * FROM reservation_user ORDER BY res_date_user DESC");
      while ($donnees = $this->req->fetch())

      {
        ?><tr>
      <th><?php echo htmlspecialchars($donnees['mail']); ?></th>
      <td><?php echo htmlspecialchars($donnees['nom']); ?></td>
      <td><?php echo htmlspecialchars($donnees['res_date_user']); ?></td>
      <td><?php echo htmlspecialchars($donnees['place']); ?></td>
      <th><?php echo htmlspecialchars($donnees['number']); ?></th>
      <td><a href="php/Reservation.php?id='<?php echo htmlspecialchars($donnees['id']);?>'"><i style="color:red;" class="fa-solid fa-trash-can"></i></a></td>
    </tr><?php
      } 
      $this->req->closeCursor();
    }


    public function delete(){

      
        // récupérer les valeurs 
        $this->id = $_GET["id"];

        // requete sql pour supprimer 
        $this->req = $this->bdd->getPdo()->query('DELETE FROM reservation_user WHERE id='.$this->id.'');


        header('Location: ../admin.php');

    } 

    public function returnDateDisponible(){
      $this->bdd = new Bdd;
      $this->dates = array();
      $this->datess = array();
      $this->valeur = 0;
      $this->valuesss= [];
      $this->indesirables = array();


      $this->req = $this->bdd->getPdo()->query('SELECT res_date FROM reservation');


      while ($donnees = $this->req->fetch())

      {


         array_push($this->dates, $donnees['res_date']);

      } // Fin de la boucle des billets

      $this->req->closeCursor();

      foreach ($this->dates as &$value) {

          $this->datess = explode(' ', $value);
          $values = current($this->datess).' ';

          if (!in_array($values, $this->dates)) {

              $value = $values;
          }

          else{

              $value = ""; 
          };

      }


      $pos = array_search(' ', $this->dates);

      // Remove from array
      unset($this->dates[$pos]);
    }
    


    public function selectDate(){


      $this->name =$_POST['name'];
      $this->number =$_POST['number'];
      $this->mail =$_POST['mail'];
      $this->place =$_POST['place'];
      $this->dates = array();
      $this->datess = array();
      $this->valeur = 0;
      $this->valuesss= [];
      $this->indesirables = array();


      if (isset($this->place) && isset($this->place) && isset($this->place) && isset($this->place)) {


          if (!empty($this->place)&& !empty($this->place)&& !empty($this->place)&& !empty($this->place)) {
              $_SESSION['name'] = $this->name;
              $_SESSION['number'] = $this->number;
              $_SESSION['mail'] = $this->mail;
              $_SESSION['place'] = $this->place;
          };

      }

      $this->req = $this->bdd->getPdo()->prepare('SELECT res_date FROM reservation WHERE places >= :place ');

      $exec = $this->req->execute(array(
      'place' => $_SESSION['place']
      ));


      while ($donnees = $this->req->fetch())

      {

          array_push($this->dates, $donnees['res_date']);

      } // Fin de la boucle des billets

      $this->req->closeCursor();


      foreach ($this->dates as &$value) {

          $this->datess = explode(' ', $value);
          $values = current($this->datess).' ';


          if (!in_array($values, $this->dates)) {

              $value = $values;

          }

          else{

              $value = "";

          };

      }

    }

    public function getDate(){
    
        return $this->dates;

    }

    public function returnTimeDispo(){

      $this->dateUser = $_POST['dateUser'];
      $_SESSION['dateUser']=$_POST['dateUser'];
      $this->datesTime = [];
      $this->bdd = new Bdd;

      $this->req = $this->bdd->getPdo()->prepare("SELECT * FROM reservation WHERE res_date LIKE :login ");

      $exec = $this->req->execute(array(

        'login' => $_SESSION['dateUser'].'%'

      ));


      while ($donnees = $this->req->fetch())

      {

          echo($donnees['res_date']);

          array_push($this->datesTime, $donnees['res_date']);

      } 

      $this->req->closeCursor();


      foreach ($this->datesTime as &$value) {

          $datessTime = explode(' ', $value);
          $value = end($datessTime);
          echo($value);
          ?>
          <option value="<?php echo $value ?>" ><?php echo $value ?></option>

          <?php 
      }
    }




    public function selectReservation(){


        $this->dateDispo =0;
        $this->dateUser =$_SESSION['dateUser'];
        echo($this->dateUser);
        $this->number =$_SESSION['number'];
        $this->mail =$_SESSION['mail'];
        $this->dateTimeUser= $this->dateUser." ".$this->timeUser;
        $this->person=$_SESSION['place'];
        $this->timeUser =$_POST['timeUser'];
        if (isset($this->timeUser) && !empty($this->timeUser)) {

            $_SESSION['timeUser'] = $this->timeUser;

        }


        $this->req = $this->bdd->getPdo()->prepare("SELECT places FROM reservation WHERE res_date LIKE :date ");
        $this->req->execute(array(
        'date' => $this->dateTimeUser
        ));


        while ($this->donnees = $this->req->fetch())

        {
            // affecter a la variables le resultat de la requetes  
            $this->dateDispo= $this->donnees['places'];

            return $this->dateDispo;
        } 

        $this->req->closeCursor();

        }


    public function updatePlace(){

        $this->selectReservation();
        if ($this->dateDispo>=1) {


        // On soustrait une places au nombres de places disponibles
            $this->dateDispo=$this->dateDispo-$this->person;
            echo($this->dateDispo);

            $this->req= $this->bdd->getPdo()->prepare('UPDATE reservation SET places = :places WHERE res_date = :date');

            $this->req->execute(array(

              'places' => $this->dateDispo,
              'date' => $this->dateTimeUser

            ));

        }
    }


    public function getDateDispo(){
        $this->updatePlace();
        return $this->dateDispo;
    }


    public function deletePlace(){
        $this->getDateDispo();
        $this->dateUser =$_SESSION['dateUser'];
        $this->timeUser =$_POST['timeUser'];
        $this->dateTimeUser= $this->dateUser." ".$this->timeUser;

        if (isset($this->timeUser) && !empty($this->timeUser)) {

            $_SESSION['timeUser'] = $this->timeUser;

        }

        if ($this->dateDispo<=0) {

            $this->req = $this->bdd->getPdo()->prepare("DELETE FROM reservation WHERE res_date= :date ");
            $this->req->execute(array(
            'date' => $this->dateTimeUser
            ));
            echo"date indisponible";

        };

        header('Location: ../reservation.php');

    }



    public function insertReservation(){

        $this->person=$_SESSION['place'];
        $this->dateUser =$_SESSION['dateUser'];
        $this->timeUser =$_POST['timeUser'];
        $this->dateTimeUser= $this->dateUser." ".$this->timeUser;

        if (isset($this->timeUser) && !empty($this->timeUser)) {

            $_SESSION['timeUser'] = $this->timeUser;

        }

        $this->name =$_SESSION['name'];

        if (isset($this->dateTimeUser) && !empty($this->dateTimeUser)) {

            $this->req= $this->bdd->getPdo()->prepare('INSERT INTO reservation_user(res_date_user, nom, number, mail, place) VALUES(:date, :name, :number, :mail, :place )');
            $this->req->execute(array(
            'name' => $this->name,
            'number' => $this->number,
            'mail' => $this->mail,
            'place' => $this->person,
            'date' => $this->dateTimeUser
            ));

        }

        $this->deletePlace();

    }


    public function getDonnéesDisponibilite(){
          $this->DateAndTime = date('Y-m-d h:i:s a', time());
          $this->bdd = new Bdd;
          $this->req = $this->bdd->getPdo()->prepare("SELECT * FROM reservation WHERE res_date > :date ");
          $this->exec = $this->req->execute(array(
          'date' => $this->DateAndTime
          ));


          while ($donnees = $this->req->fetch())

          {
              ?><tr>
              <td><?php echo htmlspecialchars($donnees['res_date']);?></td>
              <td><?php echo htmlspecialchars($donnees['places']);?></td>
              </tr><?php
          } 
          
          $this->req->closeCursor();
    } 


    public function insertDisponibilite(){
        
        $this->date = $_POST['date'];
        $this->places = $_POST['places'];
        $this->tabExtension = explode(',', $this->date);
        date_default_timezone_set('Europe/Paris');
        $this->DateAndTime = date('Y-m-d h:i:s a', time());
        if (isset($this->date) && !empty($this->date)) {

                $req= $this->bdd->getPdo()->prepare('INSERT INTO reservation(res_date, places) VALUES(:date, :places)');

                foreach ($this->tabExtension AS $ligne) {
                $req->bindParam('date', $ligne);
                $req->bindParam('places', $this->places);
                $req->execute();
                }; 
        }

        header("Location:../disponibilite.php");
    }
    
}   
    // Fin de la boucle des billets

  $admin = new Reservation;
if(isset($_GET['id'])){
  $admin->delete();
}
if(isset($_POST['timeUser'])){
  $admin->updatePlace();
  $admin->insertReservation();
}
if(isset($_POST['insertDisponibilite'])){
  $admin->insertDisponibilite();
}

  ?>
