![image laravel-icons](/logo.png)
# Laravel Icons
## SVG icons library, easy to use icons as laravel blade components

Ever felt like using inline SVG icons in markup clutters and make it difficult to read?
I felt the same and placed most frequently icons as blade components and use them in my markup. Believe me it really makes life simple. As now the using inline SVG is in trend among great developers and it's ability to be used with tailwind is fantastic.

## How to use?

- download [Laravel Icons](https://github.com/developervijay7/laravel-icons/archive/refs/heads/master.zip)
- place the 'icons' directory to '/resources/views/components' directory as it becomes '/resources/views/components/icons/*.blade.php'
- search for desired icon and copy the icon code from Laravel Icons [Website](https://laravel-icons.com)
- place the copied code where you want to place the icon in your laravel views.

## Change Icon Size

- <x-icons.star :size="20" />


## Apply custom classes to icon
- <x-icons.moon :class="bg-red-500 p-5 hover:bg-blue-500 rounded" />
