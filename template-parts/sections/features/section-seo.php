<?php
$datas = include get_template_directory() . '/data/seo-features-data.php';
?>

<section class="md:pt-40 pt-5 md:pb-80 py-28 relative">
    <div class="absolute top-0 w-full right-0 z-10 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3AAAFF" fill-opacity="0.35" d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,128C560,128,640,224,720,245.3C800,267,880,213,960,160C1040,107,1120,53,1200,32C1280,11,1360,21,1400,26.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
    <div class="absolute top-0 w-full left-0 rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#005DA4" fill-opacity="1" d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,224C685.7,213,754,171,823,149.3C891.4,128,960,128,1029,144C1097.1,160,1166,192,1234,176C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </div>
    <div class="absolute bottom-0 w-full right-0 z-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3AAAFF" fill-opacity="0.35" d="M0,192L40,213.3C80,235,160,277,240,250.7C320,224,400,128,480,128C560,128,640,224,720,245.3C800,267,880,213,960,160C1040,107,1120,53,1200,32C1280,11,1360,21,1400,26.7L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
        </svg>
    </div>
    <div class="absolute bottom-0 w-full left-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#005DA4" fill-opacity="1" d="M0,32L34.3,32C68.6,32,137,32,206,58.7C274.3,85,343,139,411,176C480,213,549,235,617,224C685.7,213,754,171,823,149.3C891.4,128,960,128,1029,144C1097.1,160,1166,192,1234,176C1302.9,160,1371,96,1406,64L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
        </svg>
    </div>
    <div class="mx-auto container text-center md:pb-40 md:pt-60 pb-0 pt-20 md:space-y-12 space-y-5">
        <div class="md:space-y-5 space-y-2.5 max-w-5xl mx-auto md:px-0 px-5">
            <h2 class="text-2xl font-bold md:text-5xl font-display">
                All in One SEO Features
            </h2>

            <p class="md:text-xl text-sm font-medium text-neutral-500">
                Create campaigns that react and adapt in real time so you can easily personalize, segment, & target for incredible conversions.
            </p>
        </div>
        <div class="grid md:grid-cols-3 grid-cols-1 md:gap-y-10 md:gap-x-10 gap-5 md:px-0 px-5">
            <?php
            foreach ($datas as $data) :
                ?>
                <div class="flex gap-2.5">
                    <div class="size-12">
                        <?= $data['svg']; ?>
                    </div>
                    <div class="text-start space-y-1">
                        <p class="md:text-xl text-base font-medium text-neutral-900">
                            <?= $data['name']; ?>
                        </p>
                        <p class="md:text-base text-sm text-neutral-600">
                            <?= $data['description']; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
