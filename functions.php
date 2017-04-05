<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function makePet($type) {
  if ($type == 'pet') {
    $valid = true;
    $description = 'It&rsquo;s a bean juice that gives people energy; it becomes espresso in it&rsquo;s highly concetrated form.';
  } else if ($type == 'dog') {
    $valid = true;
    $description = 'Get ready for picking up doo doo.';
  } else if ($type == 'cat') {
    $valid = true;
    $description = 'Cute and cuddly! Watch out for new furniture though!';
  } else if ($type == 'fish') {
    $valid = true;
    $description = 'Easy to take care of.';
  } else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).' YIKES!</strong> Type a real animal, come on dude. Be real.</p>
      </div>
    ');
  }
}
