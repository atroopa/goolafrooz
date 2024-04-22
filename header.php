
<!doctype html>
<html>
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

  #menu-toggle:checked + #menu {
      display: block;
    }
</style>
</head>
<body>
<header class="fixed sticky z-50 top-0 flex w-full flex-wrap items-center bg-gray-900 px-8 py-8 text-white shadow-md lg:px-16">
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
    <div class="flex flex-1 items-center justify-between">
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
      <nav>
        <ul class="items-center justify-between pt-4 text-base md:flex md:pt-0">
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">تماس با ما</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">درباره ما</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">وبلاگ</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">گالری</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">خدمات</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">گلخانه ها</a>
          </li>
          <li>
            <a href="#" class="text-sm md:text-xl block px-0 py-3 md:p-4 hover:text-blue-500">خانه</a>
          </li>
          <li>
            <div class="text-sm md:text-xl px-20 py-4 md:px-8"></div>
          </li>
          <li>
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
            <button id="color-changing-button" class="text-sm md:text-xl rounded-lg bg-blue-700 px-8 py-4 text-center font-bold text-black hover:bg-blue-900">محصولات و تجهیزات</button>
          </li>
        </ul>
      </nav>
    </div>
  </header>