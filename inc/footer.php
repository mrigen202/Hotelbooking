<div class="container-fluid bg-white mt-5">
    <div class="row">
        <div class="col-lg-4 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2">A&M HOTEL</h3>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quos, officia, similique cupiditate aspernatur adipisci iure 
                quibusdam porro pariatur ex magni illo, molestiae labore mollitia 
                harum repellat. Sunt eos totam praesentium.
                </p>
                    </div>
                        <div class="col-lg-4 p-4">
                    <h5 class="mb-3">Links</h5>
                    <a href="index.php" class="d-line-block mb-2 text-dark text-decoration-none">Home</a> <br>
                    <a href="rooms.php" class="d-line-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                    <a href="facilities.php" class="d-line-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                    <a href="contact.php" class="d-line-block mb-2 text-dark text-decoration-none">Contact us</a> <br>
                    <a href="about.php" class="d-line-block mb-2 text-dark text-decoration-none">About</a> <br>
                    <a href="#" class="d-line-block mb-2 text-dark text-decoration-none">© 2025 A&M HOTEL</a>

        </div>
        <div class="col-lg-4 p-4">
           <h5 class="mb-3">Follow us</h5> 
           <?php 
           if($contact_r['tw']!=''){
               echo<<<data
                    <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
                        <i class="bi bi-twitter-x me-1"></i> Twitter
                            </a>    
                            <br>
               data;
           }
           
           ?>
           
           <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-github me-1"></i> GitHub
        </a>
        <br>
           <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-facebook me-1"></i> Facebook
        </a>    
        <br> 
        
        <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-instagram me-1"></i> Instagram
        </a>  
        <br>
        <a href="#" class="d-inline-block text-dark text-decoration-none">
            <i class="bi bi-pinterest me-1"></i> Pinterest
        </a>    
        </div>
    </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by A&M DEVOPS</h6>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    function  setActive()
    {
        navbar = document.getElementById('nav-bar');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0;i<a_tags.length;i++)
    {
        let file = a_tags[i].href.split('/').pop();
        let file_name = file.split('.')[0];

        if(document.location.href.indexOf(file_name)>=0){
            a_tags[i].classList.add('active');
        }
    }
}
setActive();
</script>