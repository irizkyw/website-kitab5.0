// Mengubah warna navbar
var navLinks = document.querySelectorAll('.nav-link');

function setTextColor() {
    navLinks.forEach(function(link) {
        if (link.classList.contains('active')) {
            link.style.color = '#33D8D8'; 
        } else {
            link.style.color = '';
        }
    });
}

navLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        navLinks.forEach(function(navLink) {
            navLink.classList.remove('active');
        });

        this.classList.add('active');
        setTextColor();
    });
});

// Dropdown menu pilihan kitab
window.addEventListener('load', setTextColor);

document.addEventListener("DOMContentLoaded", function() {
const dropdownItemsNumber = document.querySelectorAll('.dropdown-menu#w-100 .dropdown-item');
const dropdownMenuButtonNumber = document.getElementById('dropdownMenuButtonNumber');

    dropdownItemsNumber.forEach(item => {
        item.addEventListener('click', function() {
            dropdownItemsNumber.forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
            const selectedValue = this.getAttribute('data-value');
            dropdownMenuButtonNumber.textContent = selectedValue;
        });
    });

    const dropdownItemsText = document.querySelectorAll('.dropdown-menu:not(#w-100) .dropdown-item');

    dropdownItemsText.forEach(item => {
        item.addEventListener('click', function() {
            dropdownItemsText.forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
            const selectedValue = this.getAttribute('data-value');
            this.closest('.dropdown').querySelector('.dropdown-toggle').textContent = selectedValue;
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
const scrollContainer = document.getElementById("scrollContainer");
const scrollProgressBar = document.getElementById("scrollProgressBar");


scrollContainer.addEventListener("scroll", function() {
    const scrollTop = this.scrollTop;
    const scrollHeight = this.scrollHeight - this.clientHeight;
    const progress = (scrollTop / scrollHeight) * 100;
    scrollProgressBar.style.width = progress + "%";
    scrollProgressBarBackground.style.width = progress + "%";
    });
});



// Background saat di klik
var listItems = document.querySelectorAll('.list-group-item:not(.favorite)');

listItems.forEach(function(item) {
    item.addEventListener('click', function() {
        listItems.forEach(function(prevItem) {
            prevItem.style.backgroundColor = '';
            prevItem.style.color = '';
        });

        this.style.backgroundColor = '#33D8D8';
        this.style.color = 'white';
    });
});

// Konten pertama active
window.onload = function() {
    var firstItem = document.querySelector('.list-group-item:not(.favorite)');
    firstItem.classList.add('active');
};

var listItems = document.querySelectorAll('.list-group-item:not(.favorite)');

listItems.forEach(function(item) {
    item.addEventListener('click', function() {
        listItems.forEach(function(prevItem) {
            prevItem.classList.remove('active');
        });

        this.classList.add('active');
    });
});

// Mengubah warna icon favorite
var heartIcons = document.querySelectorAll('.heart-icon');

heartIcons.forEach(function(heartIcon) {
    var heartPath = heartIcon.querySelector('.heart-path');

    heartIcon.addEventListener('click', function() {
        if (heartPath.getAttribute('fill') === 'red') {
            heartPath.setAttribute('fill', 'white');
        } else {
            heartPath.setAttribute('fill', 'red');
        }
    });
});


// Account Setting
var initialValues = {};
document.querySelectorAll('form input').forEach(function(input) {
    initialValues[input.id] = input.value;
});

document.getElementById('editBtn').addEventListener('click', function() {
    var inputs = document.querySelectorAll('form input');
    inputs.forEach(function(input) {
        input.removeAttribute('readonly');
        input.value = initialValues[input.id];
    });
    document.getElementById('saveBtn').style.display = 'block';
    this.style.display = 'none';
    document.getElementById('logoutBtn').style.display = 'none';
});

document.getElementById('saveBtn').addEventListener('click', function(event) {
    var editBtn = document.getElementById('editBtn');
    if (!editBtn.classList.contains('clicked')) {
        event.preventDefault();
        alert('Harap klik tombol "Edit" terlebih dahulu');
    } else {
        var inputs = document.querySelectorAll('form input');
        inputs.forEach(function(input) {
            initialValues[input.id] = input.value;
            input.setAttribute('readonly', true);
        });
        document.getElementById('saveBtn').style.display = 'none';
        editBtn.style.display = 'block';
        document.getElementById('logoutBtn').style.display = 'block';
    }
});

document.getElementById('editBtn').addEventListener('click', function() {
    this.classList.add('clicked');
});
