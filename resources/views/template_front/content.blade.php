@extends('template_front.layout')

@section('content')
<?php if(isset($konten)){ ?>
    
        <?php echo view($konten); ?>
        
<?php }else{  ?>
    
        <?php echo "File Konten Tidak Ada"; ?>
    
<?php } ?>
@endsection
