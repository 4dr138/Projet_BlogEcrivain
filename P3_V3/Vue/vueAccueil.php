<?php $titre = "Accueil"; ?>


<?php ob_start(); ?>    
  
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt iaculis purus laoreet ornare. Quisque vel leo convallis, mattis ipsum ac, vulputate metus. Aliquam erat volutpat. Nunc porttitor ac est eu laoreet. Fusce semper elit eu ante condimentum malesuada. Donec ut finibus erat. Aliquam a consectetur enim. Etiam consectetur tortor id lobortis congue. Etiam laoreet egestas vulputate. Nulla facilisi. Aliquam facilisis at enim sit amet gravida. Pellentesque porttitor odio sit amet massa fringilla suscipit. Nam in felis quis nulla efficitur sagittis. Aliquam laoreet lacus a auctor mattis. Morbi vel tristique arcu. Proin eget urna tempus, fermentum mi at, blandit risus.

In hac habitasse platea dictumst. Cras vehicula nulla vel enim faucibus sodales. Etiam ac ante odio. Nunc aliquam elit neque, nec congue orci dictum eget. Donec placerat odio et elit porta, quis vehicula eros fermentum. Nulla facilisi. Quisque eget euismod diam. Praesent posuere malesuada massa ut pulvinar. Sed vitae nunc nisl. </p>

  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt iaculis purus laoreet ornare. Quisque vel leo convallis, mattis ipsum ac, vulputate metus. Aliquam erat volutpat. Nunc porttitor ac est eu laoreet. Fusce semper elit eu ante condimentum malesuada. Donec ut finibus erat. Aliquam a consectetur enim. Etiam consectetur tortor id lobortis congue. Etiam laoreet egestas vulputate. Nulla facilisi. Aliquam facilisis at enim sit amet gravida. Pellentesque porttitor odio sit amet massa fringilla suscipit. Nam in felis quis nulla efficitur sagittis. Aliquam laoreet lacus a auctor mattis. Morbi vel tristique arcu. Proin eget urna tempus, fermentum mi at, blandit risus.

In hac habitasse platea dictumst. Cras vehicula nulla vel enim faucibus sodales. Etiam ac ante odio. Nunc aliquam elit neque, nec congue orci dictum eget. Donec placerat odio et elit porta, quis vehicula eros fermentum. Nulla facilisi. Quisque eget euismod diam. Praesent posuere malesuada massa ut pulvinar. Sed vitae nunc nisl. </p>

  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt iaculis purus laoreet ornare. Quisque vel leo convallis, mattis ipsum ac, vulputate metus. Aliquam erat volutpat. Nunc porttitor ac est eu laoreet. Fusce semper elit eu ante condimentum malesuada. Donec ut finibus erat. Aliquam a consectetur enim. Etiam consectetur tortor id lobortis congue. Etiam laoreet egestas vulputate. Nulla facilisi. Aliquam facilisis at enim sit amet gravida. Pellentesque porttitor odio sit amet massa fringilla suscipit. Nam in felis quis nulla efficitur sagittis. Aliquam laoreet lacus a auctor mattis. Morbi vel tristique arcu. Proin eget urna tempus, fermentum mi at, blandit risus.

In hac habitasse platea dictumst. Cras vehicula nulla vel enim faucibus sodales. Etiam ac ante odio. Nunc aliquam elit neque, nec congue orci dictum eget. Donec placerat odio et elit porta, quis vehicula eros fermentum. Nulla facilisi. Quisque eget euismod diam. Praesent posuere malesuada massa ut pulvinar. Sed vitae nunc nisl. </p>


<?php $contenu = ob_get_clean(); ?>


<?php ob_start(); ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt iaculis purus laoreet ornare. Quisque vel leo convallis, mattis ipsum ac, vulputate metus. Aliquam erat volutpat. Nunc porttitor ac est eu laoreet. Fusce semper elit eu ante condimentum malesuada. Donec ut finibus erat. Aliquam a consectetur enim. Etiam consectetur tortor id lobortis congue. Etiam laoreet egestas vulputate. Nulla facilisi. Aliquam facilisis at enim sit amet gravida. Pellentesque porttitor odio sit amet massa fringilla suscipit. Nam in felis quis nulla efficitur sagittis. Aliquam laoreet lacus a auctor mattis. Morbi vel tristique arcu. Proin eget urna tempus, fermentum mi at, blandit risus.</p>

<?php $bloc_droite = ob_get_clean(); ?>

<?php include_once(GABARIT . 'template.php');?>