const forms = Array.from(document.forms);
forms.forEach((item, k) => {
    item.addEventListener('submit', (e) => {
        e.preventDefault();
        let formData = new FormData(item);
        let data = [...formData.entries()];
        let qString = new URLSearchParams(data);
        qString = qString.toString();
        fetch(`http://localhost/js_form_submit_logger/log.php?${qString}`);
        alert('See log.txt');
    });
});


