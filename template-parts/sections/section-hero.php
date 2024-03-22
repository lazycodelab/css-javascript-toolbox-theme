<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cjt
 */

?>

<section class="relative overflow-hidden">
	<div class="container mx-auto grid grid-cols-1 xl:grid-cols-12 lg:gap-x-12 items-center md:pb-[10rem] lg:pb-[30rem] pb-32 px-5">
		<div class="lg:space-y-10 space-y-2.5 xl:col-span-8">
			<div class="space-y-5 md:pt-24 pt-10">
				<h1 class="lg:text-7xl text-4xl font-display lg:text-left text-center">
					A perfect WordPress plugin for adding code snippets
				</h1>
				<h2 class="lg:text-3xl text-xl font-display leading-none lg:block hidden">
					Modular. Versatile. Effortless
				</h2>
			</div>
			<p class="max-w-2xl font-medium lg:text-start text-center lg:text-lg text-sm text-neutral-600">CSS & JavaScript Toolbox (CJT) makes it safe and easy to add custom code snippets to WordPress without the need for additional plugins.</p>

			<div class="lg:block hidden">
				<?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => '/']); ?>
			</div>
		</div>
		<div class="relative xl:col-span-4 xl:block hidden flex-col items-center lg:pt-0 pt-10 h-full">
			<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'inset-0 top-20 bg-cyan-400/30 blur-3xl size-[400px]']); ?>

			<div class="rounded-2xl shadow-lg px-10 py-5 lg:absolute backdrop-blur-sm bg-white/30 top-[22%] -left-4">
				<svg class="lg:w-44 w-32" viewBox="0 0 188 107" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M92.8043 43.832L89.0283 51.112V55H86.7883V51.112L82.9963 43.832H85.5243L87.9243 48.936L90.3083 43.832H92.8043ZM102.336 50.376C102.336 50.696 102.315 50.984 102.272 51.24H95.7922C95.8455 51.88 96.0695 52.3813 96.4642 52.744C96.8589 53.1067 97.3442 53.288 97.9202 53.288C98.7522 53.288 99.3442 52.9307 99.6962 52.216H102.112C101.856 53.0693 101.366 53.7733 100.64 54.328C99.9149 54.872 99.0242 55.144 97.9682 55.144C97.1149 55.144 96.3469 54.9573 95.6642 54.584C94.9922 54.2 94.4642 53.6613 94.0802 52.968C93.7069 52.2747 93.5202 51.4747 93.5202 50.568C93.5202 49.6507 93.7069 48.8453 94.0802 48.152C94.4535 47.4587 94.9762 46.9253 95.6482 46.552C96.3202 46.1787 97.0935 45.992 97.9682 45.992C98.8109 45.992 99.5629 46.1733 100.224 46.536C100.896 46.8987 101.414 47.416 101.776 48.088C102.15 48.7493 102.336 49.512 102.336 50.376ZM100.016 49.736C100.006 49.16 99.7975 48.7013 99.3922 48.36C98.9869 48.008 98.4909 47.832 97.9042 47.832C97.3495 47.832 96.8802 48.0027 96.4962 48.344C96.1229 48.6747 95.8935 49.1387 95.8082 49.736H100.016ZM103.395 50.536C103.395 49.64 103.571 48.8453 103.923 48.152C104.286 47.4587 104.771 46.9253 105.379 46.552C105.998 46.1787 106.686 45.992 107.443 45.992C108.105 45.992 108.681 46.1253 109.171 46.392C109.673 46.6587 110.073 46.9947 110.371 47.4V46.136H112.627V55H110.371V53.704C110.083 54.12 109.683 54.4667 109.171 54.744C108.67 55.0107 108.089 55.144 107.427 55.144C106.681 55.144 105.998 54.952 105.379 54.568C104.771 54.184 104.286 53.6453 103.923 52.952C103.571 52.248 103.395 51.4427 103.395 50.536ZM110.371 50.568C110.371 50.024 110.265 49.56 110.051 49.176C109.838 48.7813 109.55 48.4827 109.187 48.28C108.825 48.0667 108.435 47.96 108.019 47.96C107.603 47.96 107.219 48.0613 106.867 48.264C106.515 48.4667 106.227 48.7653 106.003 49.16C105.79 49.544 105.683 50.0027 105.683 50.536C105.683 51.0693 105.79 51.5387 106.003 51.944C106.227 52.3387 106.515 52.6427 106.867 52.856C107.23 53.0693 107.614 53.176 108.019 53.176C108.435 53.176 108.825 53.0747 109.187 52.872C109.55 52.6587 109.838 52.36 110.051 51.976C110.265 51.5813 110.371 51.112 110.371 50.568ZM117.055 47.512C117.343 47.0427 117.716 46.6747 118.175 46.408C118.644 46.1413 119.178 46.008 119.775 46.008V48.36H119.183C118.479 48.36 117.946 48.5253 117.583 48.856C117.231 49.1867 117.055 49.7627 117.055 50.584V55H114.815V46.136H117.055V47.512Z" fill="#171717" />
					<path d="M101.969 63.64V66.44H105.729V68.216H101.969V71.176H106.209V73H99.729V61.816H106.209V63.64H101.969ZM113.141 73L111.317 70.248L109.701 73H107.301L110.197 68.552L107.269 64.136H109.797L111.605 66.872L113.237 64.136H115.637L112.725 68.552L115.669 73H113.141ZM119.125 65.416C119.413 65.0107 119.808 64.6747 120.309 64.408C120.821 64.1307 121.403 63.992 122.053 63.992C122.811 63.992 123.493 64.1787 124.101 64.552C124.72 64.9253 125.205 65.4587 125.557 66.152C125.92 66.8347 126.101 67.6293 126.101 68.536C126.101 69.4427 125.92 70.248 125.557 70.952C125.205 71.6453 124.72 72.184 124.101 72.568C123.493 72.952 122.811 73.144 122.053 73.144C121.403 73.144 120.827 73.0107 120.325 72.744C119.835 72.4773 119.435 72.1413 119.125 71.736V77.224H116.885V64.136H119.125V65.416ZM123.813 68.536C123.813 68.0027 123.701 67.544 123.477 67.16C123.264 66.7653 122.976 66.4667 122.613 66.264C122.261 66.0613 121.877 65.96 121.461 65.96C121.056 65.96 120.672 66.0667 120.309 66.28C119.957 66.4827 119.669 66.7813 119.445 67.176C119.232 67.5707 119.125 68.0347 119.125 68.568C119.125 69.1013 119.232 69.5653 119.445 69.96C119.669 70.3547 119.957 70.6587 120.309 70.872C120.672 71.0747 121.056 71.176 121.461 71.176C121.877 71.176 122.261 71.0693 122.613 70.856C122.976 70.6427 123.264 70.3387 123.477 69.944C123.701 69.5493 123.813 69.08 123.813 68.536ZM135.969 68.376C135.969 68.696 135.948 68.984 135.905 69.24H129.425C129.478 69.88 129.702 70.3813 130.097 70.744C130.492 71.1067 130.977 71.288 131.553 71.288C132.385 71.288 132.977 70.9307 133.329 70.216H135.745C135.489 71.0693 134.998 71.7733 134.273 72.328C133.548 72.872 132.657 73.144 131.601 73.144C130.748 73.144 129.98 72.9573 129.297 72.584C128.625 72.2 128.097 71.6613 127.713 70.968C127.34 70.2747 127.153 69.4747 127.153 68.568C127.153 67.6507 127.34 66.8453 127.713 66.152C128.086 65.4587 128.609 64.9253 129.281 64.552C129.953 64.1787 130.726 63.992 131.601 63.992C132.444 63.992 133.196 64.1733 133.857 64.536C134.529 64.8987 135.046 65.416 135.409 66.088C135.782 66.7493 135.969 67.512 135.969 68.376ZM133.649 67.736C133.638 67.16 133.43 66.7013 133.025 66.36C132.62 66.008 132.124 65.832 131.537 65.832C130.982 65.832 130.513 66.0027 130.129 66.344C129.756 66.6747 129.526 67.1387 129.441 67.736H133.649ZM139.844 65.512C140.132 65.0427 140.505 64.6747 140.964 64.408C141.433 64.1413 141.967 64.008 142.564 64.008V66.36H141.972C141.268 66.36 140.735 66.5253 140.372 66.856C140.02 67.1867 139.844 67.7627 139.844 68.584V73H137.604V64.136H139.844V65.512ZM145.209 63.08C144.814 63.08 144.483 62.9573 144.217 62.712C143.961 62.456 143.833 62.1413 143.833 61.768C143.833 61.3947 143.961 61.0853 144.217 60.84C144.483 60.584 144.814 60.456 145.209 60.456C145.603 60.456 145.929 60.584 146.185 60.84C146.451 61.0853 146.585 61.3947 146.585 61.768C146.585 62.1413 146.451 62.456 146.185 62.712C145.929 62.9573 145.603 63.08 145.209 63.08ZM146.313 64.136V73H144.073V64.136H146.313ZM156.766 68.376C156.766 68.696 156.745 68.984 156.702 69.24H150.222C150.275 69.88 150.499 70.3813 150.894 70.744C151.289 71.1067 151.774 71.288 152.35 71.288C153.182 71.288 153.774 70.9307 154.126 70.216H156.542C156.286 71.0693 155.795 71.7733 155.07 72.328C154.345 72.872 153.454 73.144 152.398 73.144C151.545 73.144 150.777 72.9573 150.094 72.584C149.422 72.2 148.894 71.6613 148.51 70.968C148.137 70.2747 147.95 69.4747 147.95 68.568C147.95 67.6507 148.137 66.8453 148.51 66.152C148.883 65.4587 149.406 64.9253 150.078 64.552C150.75 64.1787 151.523 63.992 152.398 63.992C153.241 63.992 153.993 64.1733 154.654 64.536C155.326 64.8987 155.843 65.416 156.206 66.088C156.579 66.7493 156.766 67.512 156.766 68.376ZM154.446 67.736C154.435 67.16 154.227 66.7013 153.822 66.36C153.417 66.008 152.921 65.832 152.334 65.832C151.779 65.832 151.31 66.0027 150.926 66.344C150.553 66.6747 150.323 67.1387 150.238 67.736H154.446ZM163.313 64.008C164.369 64.008 165.222 64.344 165.873 65.016C166.524 65.6773 166.849 66.6053 166.849 67.8V73H164.609V68.104C164.609 67.4 164.433 66.8613 164.081 66.488C163.729 66.104 163.249 65.912 162.641 65.912C162.022 65.912 161.532 66.104 161.169 66.488C160.817 66.8613 160.641 67.4 160.641 68.104V73H158.401V64.136H160.641V65.24C160.94 64.856 161.318 64.5573 161.777 64.344C162.246 64.12 162.758 64.008 163.313 64.008ZM168.403 68.568C168.403 67.6507 168.59 66.8507 168.963 66.168C169.336 65.4747 169.854 64.9413 170.515 64.568C171.176 64.184 171.934 63.992 172.787 63.992C173.886 63.992 174.792 64.2693 175.507 64.824C176.232 65.368 176.718 66.136 176.963 67.128H174.547C174.419 66.744 174.2 66.4453 173.891 66.232C173.592 66.008 173.219 65.896 172.771 65.896C172.131 65.896 171.624 66.1307 171.251 66.6C170.878 67.0587 170.691 67.7147 170.691 68.568C170.691 69.4107 170.878 70.0667 171.251 70.536C171.624 70.9947 172.131 71.224 172.771 71.224C173.678 71.224 174.27 70.8187 174.547 70.008H176.963C176.718 70.968 176.232 71.7307 175.507 72.296C174.782 72.8613 173.875 73.144 172.787 73.144C171.934 73.144 171.176 72.9573 170.515 72.584C169.854 72.2 169.336 71.6667 168.963 70.984C168.59 70.2907 168.403 69.4853 168.403 68.568ZM186.844 68.376C186.844 68.696 186.823 68.984 186.78 69.24H180.3C180.353 69.88 180.577 70.3813 180.972 70.744C181.367 71.1067 181.852 71.288 182.428 71.288C183.26 71.288 183.852 70.9307 184.204 70.216H186.62C186.364 71.0693 185.873 71.7733 185.148 72.328C184.423 72.872 183.532 73.144 182.476 73.144C181.623 73.144 180.855 72.9573 180.172 72.584C179.5 72.2 178.972 71.6613 178.588 70.968C178.215 70.2747 178.028 69.4747 178.028 68.568C178.028 67.6507 178.215 66.8453 178.588 66.152C178.961 65.4587 179.484 64.9253 180.156 64.552C180.828 64.1787 181.601 63.992 182.476 63.992C183.319 63.992 184.071 64.1733 184.732 64.536C185.404 64.8987 185.921 65.416 186.284 66.088C186.657 66.7493 186.844 67.512 186.844 68.376ZM184.524 67.736C184.513 67.16 184.305 66.7013 183.9 66.36C183.495 66.008 182.999 65.832 182.412 65.832C181.857 65.832 181.388 66.0027 181.004 66.344C180.631 66.6747 180.401 67.1387 180.316 67.736H184.524Z" fill="#171717" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M8.70833 8.5L16.5 0H40.5V97.5H29V9V8.5H28.5H8.70833ZM7.79167 9.5L0 18H16.5V97.5H28V9.5H7.79167Z" fill="#005DA4" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M133.113 23.048C124.685 9.79408 109.87 1 93 1C66.7665 1 45.5 22.2665 45.5 48.5C45.5 69.6489 59.3216 87.5696 78.4245 93.7219L85.1347 85.0504C68.7294 81.2589 56.5 66.5576 56.5 49C56.5 28.5655 73.0655 12 93.5 12C107.748 12 120.115 20.0531 126.297 31.8559L133.113 23.048ZM125.622 32.7286C119.68 21.0221 107.527 13 93.5 13C73.6177 13 57.5 29.1177 57.5 49C57.5 66.2431 69.6229 80.6548 85.8105 84.1769L90.694 77.866C75.9943 76.4546 64.5 64.0696 64.5 49C64.5 32.9837 77.4837 20 93.5 20C106.015 20 116.678 27.9272 120.742 39.0342L125.622 32.7286Z" fill="#005DA4" />
					<path d="M142.5 11C142.5 11 126.81 31.1786 119.5 41" stroke="#005DA4" stroke-linecap="round" />
					<path d="M92.5 76C92.5 76 76.8101 96.1786 69.5 106" stroke="#005DA4" stroke-linecap="round" />
				</svg>
			</div>
			<div class="lg:absolute right-0 -bottom-14 z-20 lg:block hidden">
				<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/hero.svg" />
			</div>
			<div class="rounded-2xl shadow-lg lg:absolute backdrop-blur-sm bg-white/30 top-24 right-0 z-10">
				<div class="flex flex-col items-center justify-center p-10">
					<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40 32.5V55M40 55L30 45M40 55L50 45M22.5 65C18.9314 65.0039 15.4784 63.7354 12.7609 61.4223C10.0435 59.1092 8.2398 55.9031 7.67365 52.3797C7.1075 48.8564 7.81604 45.2466 9.67202 42.1986C11.528 39.1507 14.4098 36.8643 17.8 35.75C16.929 31.2872 17.8291 26.6607 20.3099 22.8501C22.7907 19.0394 26.6572 16.344 31.0907 15.3345C35.5242 14.325 40.1765 15.0808 44.0625 17.4417C47.9485 19.8027 50.763 23.5834 51.91 27.9833C53.6833 27.4066 55.5826 27.3372 57.3934 27.783C59.2041 28.2288 60.8541 29.172 62.157 30.5061C63.4599 31.8403 64.3638 33.5121 64.7667 35.3329C65.1695 37.1536 65.0552 39.0508 64.4366 40.81C67.1655 41.8523 69.4434 43.817 70.8752 46.3632C72.307 48.9093 72.8024 51.8764 72.2754 54.7496C71.7484 57.6228 70.2323 60.2209 67.9901 62.0932C65.7479 63.9655 62.9211 64.9939 60 65H22.5Z" stroke="#005DA4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<p class="text-3xl font-bold leading-loose font-display">10,000+</p>
					<span class="text-sm tracking-wide">Downloads</span>
				</div>
			</div>
			<div class="rounded-2xl shadow-lg md:px-24 px-10 py-3 lg:absolute backdrop-blur-sm bg-white/30 bottom-36 -left-12">
				<div class="flex flex-col items-center justify-center space-y-1.5">
					<svg width="41" height="40" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M35.5 13.75C35.5 9.60833 32.0017 6.25 27.6867 6.25C24.4617 6.25 21.6917 8.12667 20.5 10.805C19.3083 8.12667 16.5383 6.25 13.3117 6.25C9 6.25 5.5 9.60833 5.5 13.75C5.5 25.7833 20.5 33.75 20.5 33.75C20.5 33.75 35.5 25.7833 35.5 13.75Z" stroke="#005DA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
					<p class="text-3xl font-bold leading-none font-display">
						4.9<small class="text-xs font-normal font-body">/5</small>
					</p>
					<div class="flex items-center gap-x-2">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
						</svg>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
							<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
						</svg>
					</div>
					<span class="text-sm tracking-wide">1000+ verified reviews</span>
				</div>
			</div>
		</div>
		<div class="w-full h-full xl:hidden flex flex-col items-center mt-5 space-y-5">
			<div class="grid grid-cols-3 place-items-center rounded bg-white shadow-md py-3 px-1.5">
				<div class="w-full">
					<img src="<?= esc_url(get_template_directory_uri()); ?>/assets/images/10-years.png" class="w-3/4 mx-auto" />
				</div>
				<div class="border-l border-r border-neutral-100">
					<div class="flex flex-col items-center justify-center space-y-1.5">
						<svg width="30" height="30" viewBox="0 0 41 40" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M35.5 13.75C35.5 9.60833 32.0017 6.25 27.6867 6.25C24.4617 6.25 21.6917 8.12667 20.5 10.805C19.3083 8.12667 16.5383 6.25 13.3117 6.25C9 6.25 5.5 9.60833 5.5 13.75C5.5 25.7833 20.5 33.75 20.5 33.75C20.5 33.75 35.5 25.7833 35.5 13.75Z" stroke="#005DA4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<p class="text-xl font-bold leading-none font-display">
							4.9<small class="text-xs text-neutral-600 font-body">/5</small>
						</p>
						<div class="flex items-center gap-x-0.5 text-brand-blue">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-3">
								<path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
							</svg>
						</div>
						<span class="text-xs text-center tracking-wide text-neutral-900">1000+ verified reviews</span>
					</div>
				</div>
				<div class="">
					<div class="flex flex-col items-center justify-center">
						<svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M40 32.5V55M40 55L30 45M40 55L50 45M22.5 65C18.9314 65.0039 15.4784 63.7354 12.7609 61.4223C10.0435 59.1092 8.2398 55.9031 7.67365 52.3797C7.1075 48.8564 7.81604 45.2466 9.67202 42.1986C11.528 39.1507 14.4098 36.8643 17.8 35.75C16.929 31.2872 17.8291 26.6607 20.3099 22.8501C22.7907 19.0394 26.6572 16.344 31.0907 15.3345C35.5242 14.325 40.1765 15.0808 44.0625 17.4417C47.9485 19.8027 50.763 23.5834 51.91 27.9833C53.6833 27.4066 55.5826 27.3372 57.3934 27.783C59.2041 28.2288 60.8541 29.172 62.157 30.5061C63.4599 31.8403 64.3638 33.5121 64.7667 35.3329C65.1695 37.1536 65.0552 39.0508 64.4366 40.81C67.1655 41.8523 69.4434 43.817 70.8752 46.3632C72.307 48.9093 72.8024 51.8764 72.2754 54.7496C71.7484 57.6228 70.2323 60.2209 67.9901 62.0932C65.7479 63.9655 62.9211 64.9939 60 65H22.5Z" stroke="#005DA4" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
						<p class="text-xl font-bold font-display">10,000+</p>
						<span class="text-xs tracking-wide">Downloads</span>
					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/components/component', 'button', ['content' => 'Get CJT PLUS NOW', 'url' => '/']); ?>
			<a href="https://youtu.be/vYAKePVgJqE?si=JQzZGE0zsG5MBmrq" class="flex items-center gap-2.5 text-sm text-brand-blue font-medium">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" fill="#0A0A0A" stroke="#0A0A0A" />
					<path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" stroke="#FFFFFF" fill="#ffffff" />
				</svg>
				Watch Video
			</a>
		</div>
	</div>

	<div class="absolute bottom-0 w-full -z-[1]">
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
	</div>


	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 absolute rotate-6 left-1/2 top-20']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-amber-200/50 absolute -rotate-6 right-1/3 bottom-1/2']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-lime-200/50 absolute rotate-3 left-1/3 top-1/3']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-blue-200/50 absolute left-40 top-1/4']); ?>
	<?php get_template_part('template-parts/components/component', 'small-blob', ['class' => 'bg-green-300/50 -rotate-6 left-[40%] bottom-1/2']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'md:-left-52 -left-20 top-10 bg-cyan-400/20 blur-2xl md:size-[350px] size-[220px] -z-[1]']); ?>
	<?php get_template_part('template-parts/components/component', 'blob', ['class' => 'lg:hidden -right-20 bottom-[50%] bg-amber-300/20 blur-2xl md:size-[350px] size-[220px] -z-[1]']); ?>
	<!-- Youtube player start -->
	<div class="absolute -bottom-[40%] z-10 left-1/2 transform -translate-x-1/2 -translate-y-1/2 xl:block hidden">
		<div class="bg-white p-2.5 shadow-xl">
			<iframe width="1000" height="500" src="https://www.youtube.com/embed/vYAKePVgJqE?si=n0rU6Uv8s_6pvhnF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</div>
	</div>
	<!-- Youtube player end -->
</section>