function log_submit() {
    
    let form = document.querySelector("form");
    const url = form.action;
    let initRequest = { method: 'POST',
                        mode: 'same-origin',
                        cache: 'default',
                        body: new FormData(form)
                    };

    let request = new Request(url, initRequest);

    fetch(request).then(response => {
        if(response.status >= 400 && response.status < 500) {
            throw Error(response.status);
        }

        if(!response.ok) {
            throw Error(response.status);
        }
        return response.text();
    }).then(function(response) {
        console.info(`${response}`);
    }).catch(function(error) {
        alert(error);
    });
    
    return false;
}