document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('biodata-form');
    const namaInput = document.getElementById('nama');
    const alamatInput = document.getElementById('alamat');
    const nimInput = document.getElementById('nim');
    const passwordInput = document.getElementById('password');
    const emailInput = document.getElementById('email');
    const genderInputs = document.querySelectorAll('input[name="gender"]');
    const semesterCheckboxes = document.querySelectorAll('input[type="checkbox"]');
    // const programStudiSelect = document.getElementById('program-studi');
    // const alamatTextarea = document.getElementById('alamat');
    const usiaInput = document.getElementById('usia');
    const teleponInput = document.getElementById('telepon');
    const namaError = document.getElementById('nama-error');
    const nimError = document.getElementById('nim-error');
    const passwordError = document.getElementById('password-error');
    const emailError = document.getElementById('email-error');
    const genderError = document.getElementById('gender-error');
    const semesterError = document.getElementById('semester-error');
    const programStudiError = document.getElementById('program-studi-error');
    const alamatError = document.getElementById('alamat-error');
    const usiaError = document.getElementById('usia-error');
    const teleponError = document.getElementById('telepon-error');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        validateForm();
    });

    namaInput.addEventListener('blur', validateNama);
    nimInput.addEventListener('blur', validateNim);
    passwordInput.addEventListener('blur', validatePassword);
    emailInput.addEventListener('blur', validateEmail);
    // for (const genderInput of genderInputs) {
    //     genderInput.addEventListener('change', validateGender);
    // }
    for (const checkbox of semesterCheckboxes) {
        checkbox.addEventListener('change', validateSemester);
    }
    // programStudiSelect.addEventListener('change', validateProgramStudi);
    alamatInput.addEventListener('blur', validateAlamat);
    usiaInput.addEventListener('blur', validateUsia);
    teleponInput.addEventListener('blur', validateTelepon);

    function validateForm() {
        let isValid = true;
        if (!validateNama()) {
            isValid = false;
        }
        if (!validateNim()) {
            isValid = false;
        }
        if (!validatePassword()) {
            isValid = false;
        }
        if (!validateEmail()) {
            isValid = false;
        }
        if (!validateGender()) {
            isValid = false;
        }
        if (!validateSemester()) {
            isValid = false;
        }
        // if (!validateProgramStudi()) {
        //     isValid = false;
        // }
        if (!validateAlamat()) {
            isValid = false;
         }
        if (!validateUsia()) {
            isValid = false;
        }
        if (!validateTelepon()) {
            isValid = false;
        }

        if (isValid) {
            
            alert('Form berhasil disubmit!');
            form.submit();
            // window.location.href = 'proses.php';
        }
    }

    function validateNama() {
        const namaValue = namaInput.value.trim();
        if (namaValue === '') {
            namaError.textContent = 'Nama tidak boleh kosong.';
            return false;
        }
        namaError.textContent = '';
        return true;
    }

    function validateNim() {
        const nimValue = nimInput.value.trim();
        if (nimValue === '') {
            nimError.textContent = 'NIM tidak boleh kosong.';
            return false;
        }
        const nimRegex = /^\d{10,}$/;
        if (!nimRegex.test(nimValue)) {
            nimError.textContent = 'NIM harus terdiri dari minimal 10 digit angka.';
            return false;
        }
        nimError.textContent = '';
        return true;
    }

    function validatePassword() {
        const passwordValue = passwordInput.value.trim();
        if (passwordValue === '') {
            passwordError.textContent = 'Password tidak boleh kosong.';
            return false;
        }
        if (passwordValue.length < 8) {
            passwordError.textContent = 'Password harus terdiri dari minimal 8 karakter.';
            return false;
        }
        passwordError.textContent = '';
        return true;
    }

    function validateEmail() {
        const emailValue = emailInput.value.trim();
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (emailValue === '') {
            emailError.textContent = 'Email tidak boleh kosong.';
            return false;
        }
        if (!emailRegex.test(emailValue)) {
            emailError.textContent = 'Email tidak valid.';
            return false;
        }
        emailError.textContent = '';
        return true;
    }

    function validateGender() {
        for (const genderInput of genderInputs) {
            if (genderInput.checked) {
                genderError.textContent = '';
                return true;
            }
        }
        genderError.textContent = 'Pilih jenis kelamin.';
        return false;
    }

    function validateSemester() {
        for (const checkbox of semesterCheckboxes) {
            if (checkbox.checked) {
                semesterError.textContent = '';
                return true;
            }
        }
        semesterError.textContent = 'Pilih setidaknya satu semester.';
        return false;
    }

    // function validateProgramStudi() {
    //     const selectedValue = programStudiSelect.value;
    //     if (selectedValue === '') {
    //         programStudiError.textContent = 'Pilih program studi.';
    //         return false;
    //     }
    //     programStudiError.textContent = '';
    //     return true;
    // }

    function validateAlamat() {
        const alamatValue = alamatInput.value.trim();
        if (alamatValue === '') {
            alamatError.textContent = 'Alamat tidak boleh kosong.';
            return false;
        }
        alamatError.textContent = '';
        return true;
    }

    function validateUsia() {
        const usiaValue = usiaInput.value.trim();
        if (usiaValue === '') {
            usiaError.textContent = 'Usia tidak boleh kosong.';
            return false;
        }
        const usiaNumber = parseInt(usiaValue);
        if (isNaN(usiaNumber) || usiaNumber <= 0) {
            usiaError.textContent = 'Usia harus angka positif.';
            return false;
        }
        usiaError.textContent = '';
        return true;
    }

    function validateTelepon() {
        const teleponValue = teleponInput.value.trim();
        if (teleponValue === '') {
            teleponError.textContent = 'Nomor telepon tidak boleh kosong.';
            return false;
        }
        const teleponRegex = /^\d{10,}$/;
        if (!teleponRegex.test(teleponValue)) {
            teleponError.textContent = 'Nomor telepon harus terdiri dari minimal 10 digit angka.';
            return false;
        }
        teleponError.textContent = '';
        return true;
    }
});
