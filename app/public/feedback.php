<?php include 'inc/header.php'; ?>   

<?php
  $feedback = [
    [
      'id' => '1',
      'name' => 'Beth Williams',
      'email' => 'beth@email.com',
      'body' => 'Wando Media is ok'
    ],
    [
      'id' => '2',
      'name' => 'Walt Williams',
      'email' => 'walt@email.com',
      'body' => 'Wando Media sucks'
    ],
    [
      'id' => '3',
      'name' => 'Bill Johnson',
      'email' => 'bill@email.com',
      'body' => 'Wando Media is Rocks!'
    ]
  ];
?>
    <h2>Past Feedback</h2>
    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback!</p>
    <?php endif; ?>
    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>
<?php include 'inc/footer.php'; ?>