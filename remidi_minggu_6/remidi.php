<?php
$merk = [
    ["Makanan", "Bakso", 200000],
    ["Makanan", "Lontong", 100000],
    ["Makanan", "Ketoprak", 200000],
    ["Makanan", "Martabak", 250000],
    ["Minuman", "Teh", 50000],
    ["Minuman", "Es Teh", 100000],
    ["Snack", "Bakwan", 200000],
    ["Snack", "Pisang Goreng", 150000]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($merk as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$tampilkan_merk=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $tampilkan_merk=$merk;
    }else{
        foreach($merk as $key)
        {
            if($key[0] == $filter){
                $tampilkan_merk[]=[$key[0],$key[1],$key[2]];
            }
        }
    }
}else{
    $tampilkan_merk=$merk;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <form action="remidi.php" method="post" class="m-3">
      <h2>filter Menu</h2>
        <select name="filter" class="text-center">
            <option value="">
                Tampilkan Semua
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
    </form>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Menu</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($tampilkan_merk as $key => $value): ?>
  <tbody>
    <tr>
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="thead-light">
    <tr>
      <th scope="col">Total Keseluruhan</th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>