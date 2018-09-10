<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <style media="screen">
    .multi-item-carousel{
.carousel-inner{
  > .item{
    transition: 500ms ease-in-out left;
  }
  .active{
    &.left{
      left:-33%;
    }
    &.right{
      left:33%;
    }
  }
  .next{
    left: 33%;
  }
  .prev{
    left: -55%;
  }
  @media all and (transform-3d), (-webkit-transform-3d) {
    > .item{
      // use your favourite prefixer here
      transition: 500ms ease-in-out left;
      transition: 500ms ease-in-out all;
      backface-visibility: visible;
      transform: none!important;
    }
  }
}
.carouse-control{
  &.left, &.right{
    background-image: none;
  }
}
}

// non-related styling:
body{
background: #333;
color: #ddd;
}
h1{
color: white;
font-size: 2.25em;
text-align: center;
margin-top: 1em;

margin-bottom: 2em;
text-shadow: 0px 2px 0px rgba(0, 0, 0, 1);
}
    </style>
</head>
