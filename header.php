<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        screens: {
          xs: '320px',
          sm: '480px',
          md: '768px',
          lg: '976px',
          xl: '1440px',
        },
        extend: {

        },
        animation: {
          rotate: 'rotate 30s linear infinite',
        }
      }
    }
  </script>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500&display=swap');

    .font-roboto {
      font-family: Manrope, sans-serif;
    }

    .rounded-large {
      border-radius: 4rem;
    }

    .bg-card {
      background-image: url('https://lh3.googleusercontent.com/gIrG8AMwLDarHJMs68aoBE327dT_O74kyQe5rVddstbe_ndAk5PXSf0UrzCI1PbZlPDhLN0TFWuIb7CkpNuZghX4VRgX3wOjzNeg5axIz8ISTI5CZQ=w1200-rj');
      background-size: cover;
    }

    .bg-card-b {
      background-image: url('https://lh3.googleusercontent.com/CAW8df0-OQi3LCK0yKewayBIXwGEJl3RceztrFQtQ1uDk-qv1cStc4PlPfscT408dRnqz20f43XkRoIa_5nom0bVJR4VFNF1crJ-6sOnQzbW-DlNrSjF=w1200-rj');
      background-size: cover;
    }


    :root {
      --blue-color: #3490dc;
      --green-color: #38a169;
    }

    #color-changing-button {
      transition: background-color 0.3s ease;
    }

    #color-changing-button.blue {
      background-color: var(--blue-color);
    }

    #color-changing-button.green {
      background-color: var(--green-color);
    }
    .container {
  padding-top: 2rem; /* padding-top برابر با 2rem */
  padding-right: 0; /* padding-right برابر با 0 */
  padding-bottom: 0; /* padding-bottom برابر با 0 */
  padding-left: 0; /* padding-left برابر با 0 */
}


.slider-wrapper{
  position: relative;
  width: 100%;

  margin: 0 auto;
}

.slider {
  display: flex;
  aspect-ratio: 16/9;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scroll-behavior: smooth;
  box-shadow: 0 1.5rem 3rem -0.7rem hsla(0, 0%, 0%, 0.25);
  border-radius: 0.5rem;
  max-height: 500px; /* حداکثر ارتفاع 500 پیکسل */
  width: 100%; /* ارتفاع 100% */
}

.slider img {
  flex: 1 0 100%;
  scroll-snap-align: start;
  object-fit: cover;
  width: 100%;
  height: auto;
}

.slider-nav{
  display: flex;
  column-gap: 1rem;
  position: absolute;
  bottom: 1.25rem;
  left: 50%;
  transform: translateX(-50%);
  z-index: 1;
}

.slider-nav a {
  width: 0.5rem;
  height: 0.5rem;
  border-radius: 50%;
  background-color: #fff;
  opacity: 0.75;
  transition: opacity ease 250ms;
}

.slider-nav a:hover{
  opacity: 1;
}
  </style>
</head>

<body>
  <header class="fixed sticky z-50 top-0 flex w-full  flex-row justify-between items-center bg-gray-900 px-8 py-3 text-white shadow-md lg:px-10">
    <script>
      const logos = [
        'https://golafrooz.com/wp-content/uploads/2024/04/golafrooz.png',
        'https://golafrooz.com/wp-content/uploads/2024/04/golafrooz-1.png'
      ];
      let currentLogoIndex = 0;

      setInterval(() => {
        const logoElement = document.querySelector('.logo-image');
        currentLogoIndex = (currentLogoIndex + 1) % logos.length;
        logoElement.src = logos[currentLogoIndex];
      }, 2000);
    </script>
    <div class=" flex flex-row items-center justify-between">
      <a href="https://golafrooz.com" class="flex items-center space-x-3 rtl:space-x-reverse m-2">
        <img class="logo-image w-24 h-24 rounded-full mx-auto" src="https://golafrooz.com/wp-content/uploads/2024/04/golafrooz.png" alt="logo" width="384" height="512">
        <span class="self-center text-sm md:text-2xl font-semibold whitespace-nowrap text-white">GOLAFROOZ CO</span>
      </a>
    </div>
    <label for="menu-toggle" class="block cursor-pointer md:hidden">
      <span class="sr-only">Open main menu</span>
      <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
      </svg>
    </label>
    <input type="checkbox" id="menu-toggle" class="hidden" />
    <div class="text-right font-bold  md:text-sm hidden md:flex md:items-center md:w-auto w-full" id="menu">
      <nav class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center justify-between pt-4 text-base md:flex md:pt-0">
          <?PHP wp_nav_menu(array(
            'theme_location' => 'Main_Menu',
            'depth' => '1',
            'menu'           => false,
            'container'      => 'div',
            'menu_class'  => 'text-white items-start justify-start gap-x-5 px-10 w-full flex flex-row',
          )); ?>
          <div>
            <script>
              setInterval(() => {
                const button = document.getElementById('color-changing-button');
                if (button.classList.contains('blue')) {
                  button.classList.remove('blue');
                  button.classList.add('green');
                } else {
                  button.classList.remove('green');
                  button.classList.add('blue');
                }
              }, 2000);
            </script>
            <button id="color-changing-button" class="text-sm md:text-xl rounded-lg bg-blue-700 px-12 py-4 text-center font-bold text-black hover:bg-blue-900">محصولات و تجهیزات</button>
          </div>
        </div>
      </nav>
    </div>
    <div class=" mx-10 md:mx-0"></div>
  </header>