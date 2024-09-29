<section>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .box {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        background-color: #fff;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .form {
        display: flex;
        flex-direction: column;
    }

    .form-content {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-border {
        margin-bottom: 10px;
    }

    #submit-btn {
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #submit-btn:hover {
        background-color: #0056b3;
    }

    .maps {
        width: 100%;
        height: 300px;
        border: 0;
        margin-top: 20px;
    }

    @media (min-width: 600px) {
        .maps {
            height: 400px;
        }
    }
</style>
</head>
<body>

<section>
<center>
    <div id="ulasan">
        <div class="box">
                <div class="ulasangambar">
                    <div class="kontainer">
                        <br>
                        <h1>Berikan Ulasan</h1>
                        <form id="myForm" action="simpanulasan.php" method="post" class="form">
                            <label for="user-email" style="padding-top:13px">&nbsp;Email</label> 
                            <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required />
                            <div class="form-border"></div>
                            <label for="user-name" style="padding-top:13px">&nbsp;Nama</label> 
                            <input id="user-name" class="form-content" type="text" name="nama" autocomplete="on" required />
                            <div class="form-border"></div>
                            <label for="user-review" style="padding-top:22px">&nbsp;Ulasan</label> 
                            <textarea id="user-review" class="form-content" name="ulasan" rows="4" required></textarea>
                            <div class="form-border"><br>
                            <input type="submit" value="kirim" name="kirim" id="submit-btn"/>
                            </div>
                        </form>
                    </div>

                    <!--maps-->
                    <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126840.08075814972!2d106.6933300390625!3d-6.552896299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58351fd80c7%3A0xb47376408b2b9505!2sDaniel%20Motor!5e0!3m2!1sid!2sid!4v1712202015736!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </center>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        // Submit form data using AJAX
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "Ulasan terkirim",
                    showConfirmButton: false,
                    timer: 1700
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!'
            });
            console.error('Error:', error);
        });
    });
</script>

            </div>
        </form>
        </div>

        <!--maps-->
        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126840.08075814972!2d106.6933300390625!3d-6.552896299999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c58351fd80c7%3A0xb47376408b2b9505!2sDaniel%20Motor!5e0!3m2!1sid!2sid!4v1712202015736!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </center>
    </div>
    </div>
    </section>
        <br>