<?php 


use yii\helpers\Html;
$this->title = 'profile';
$this->params['breadcrumbs'][]=$this->title;

?>
  <div class="site_index">
  
   <h1>This is Your Profile</h1>
   
<?php echo'FullName:'. $model->FullName; ?><br />
<?php echo'Gender:'. $model->Gender; ?><br />
<?php echo'DOB:'. $model->DOB; ?><br />
<?php echo'Years_Of_Experience:'. $model->Years_Of_Experience; ?><br />
<?php echo'Industry:'. $model->Industry; ?><br />
<?php echo'Location:'. $model->Location; ?><br />
<?php echo'AboutMe:'. $model->AboutMe; ?><br />
<?php echo'ProfilePicture:'. $model->ProfilePicture; ?><br />
<?php echo'Career_Level'. $model->Career_Level; ?><br />
<?php echo'Communication_level:'. $model->Communication_level; ?><br />
<?php echo'Organizational_level:'. $model->Organizational_level; ?><br />
<?php echo'Job_Related_level:'. $model->Job_Related_level; ?><br />
<?php echo'Address:'. $model->Address; ?><br />
<?php echo'Phone_Number:'. $model->Phone_Number; ?><br />
<?php echo'Website:'. $model->Website; ?><br />
<?php echo'email:'. $model->email; ?><br />
