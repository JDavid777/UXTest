
<body class="mt-5">

<?= $this->Form->create()?>
    <div class="mt-5">
        <div class="row justify-content-center h-100">
            <div class="col-sm-6 col-12 align-self-center text-center">
                <div class="card shadow">
                    <img class="card-img-top img-responsive w-25 align-self-center" src="https://d2x5ku95bkycr3.cloudfront.net/App_Themes/Common/images/profile/0_200.png" alt="Card image cap">
                    <div class="card-body col-sm-8 col-12 align-self-center">           

                            <?= $this->Form->input('username',['class'=> 'form-control mb-2','placeholder'=> ['Nombre de Usuario','label' => false, 'required']]);?>  
                            <?= $this->Form->input('password',['class'=> 'form-control mb-2','placeholder'=> ['Contraseña','label' => false, 'required']]);?>
                            <?= $this->Form->button('Ingresar',['class' => 'btn btn-primary']);?>
                                  
                    </div>
                </div>
            </div>
        </div>
    </div> 

<?= $this->Form->end()?>

<?= $this->Flash->render('auth')?>
</body>