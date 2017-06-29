function log_submit() {
    
    let form = document.querySelector("form");
    const url = form.action;

    var requestHeaders = new Headers();
    requestHeaders.append('Cookie', document.querySelector("#hiddenData").name + document.querySelector("#hiddenData").value);

    let initRequest = { method: 'POST',
                        mode: 'same-origin',
                        cache: 'default',
                        headers: requestHeaders,
                        credentials: 'same-origin',
                        body: new FormData(form)
    };

    let request = new Request(url, initRequest);

    fetch(request).then(response => {
        if(!response.ok) {
            throw Error(response.status);
        }
        return response.text();
    }).then(function(response) {
        window.location.assign('index.php/home/');
    }).catch(function(error) {
        alert(error);
    });
    
    return false;
}