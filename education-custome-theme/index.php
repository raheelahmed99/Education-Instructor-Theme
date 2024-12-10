<?php
   get_header();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Assets/CSS/style.css" />
    <title>WPWorld</title>
</head>

<body>


    <main>
     <!-----------------------------Hero Section---------------------------------------->   
        <section class="hero">
            <div class="awards">
                <div class="award">
                    <span>🏆</span>
                    <p>Best Support<br><strong>2024</strong></p>
                </div>
                <div class="award">
                    <span>🏆</span>
                    <p>SEO LEADER<br><strong>2024</strong></p>
                </div>
                <div class="award">
                    <span>🏆</span>
                    <p>Best Speed<br><strong>2024</strong></p>
                </div>
            </div>
            <div class="content">
                <h1>Unlimited WordPress Hosting that Grows Your Traffic</h1>
                <p>Switch now to get your <strong>free SEO Campaign.</strong> Our engineers will migrate, optimize, and
                    secure your website within 12 hours.</p>
                <div class="cta-buttons">
                    <a href="#" class="cta-button primary">Start Now</a>
                    <a href="#" class="cta-button secondary">See Features</a>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
    