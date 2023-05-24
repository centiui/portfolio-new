const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('showtilt');
        } else {
            entry.target.classList.remove('showtilt');
        }
    });
});


const hiddenElements2 = document.querySelectorAll('.hiddentilt');
hiddenElements2.forEach((el) => observer2.observe(el));

const observer3 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add('showup');
        } else {
            entry.target.classList.remove('showup');
        }
    });
});


const hiddenElements3 = document.querySelectorAll('.hiddenup');
hiddenElements3.forEach((el) => observer3.observe(el));