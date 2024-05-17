const blocks = document.querySelectorAll('div[data-hide]')
blocks.forEach((block) => {
    block.style.display = 'none';
})

function display_levelOfEducation(levelOfEducation) {
    var ssoContent = document.getElementById('ssoContent');
    var voContent = document.getElementById('voContent');

    switch (levelOfEducation) {
        case 'sso':
            ssoContent.style.display = 'block';
            voContent.style.display = 'none';
            break;
        case 'vo':
            ssoContent.style.display = 'none';
            voContent.style.display = 'block';
            break;
    }
}

function display_sso_then(sso_then) {
    var ssoAfter9 = document.getElementById('ssoAfter9');
    var ssoAfter11 = document.getElementById('ssoAfter11');

    switch (sso_then) {
        case 'sso_9':
            ssoAfter9.style.display = 'block';
            ssoAfter11.style.display = 'none';
            break;
        case 'sso_11':
            ssoAfter9.style.display = 'none';
            ssoAfter11.style.display = 'block';
            break;
    }
}

function display_sso_11_then(formOfStudy) {
    var dAfter11_sso = document.getElementById('dAfter11_sso');
    var zAfter11_sso = document.getElementById('zAfter11_sso');

    switch (formOfStudy) {
        case 'sso_11_d':
            dAfter11_sso.style.display = 'block';
            zAfter11_sso.style.display = 'none';
            break;
        case 'sso_11_z':
            dAfter11_sso.style.display = 'none';
            zAfter11_sso.style.display = 'block';
            break;
    }
}

function display_vo_then(whatHaveFinished) {
    var voAfter11 = document.getElementById('voAfter11');
    var voAfterSso = document.getElementById('voAfterSso');

    switch (whatHaveFinished) {
        case 'vo_11':
            voAfter11.style.display = 'block';
            voAfterSso.style.display = 'none';
            break;
        case 'vo_sso':
            voAfter11.style.display = 'none';
            voAfterSso.style.display = 'block';
            break;
    }
}

function display_vo_sso_then(formOfStudy) {
    var dAfterSso = document.getElementById('dAfterSso');
    var zAfterSso = document.getElementById('zAfterSso');

    switch(formOfStudy) {
        case 'vo_sso_d':
            dAfterSso.style.display = 'block';
            zAfterSso.style.display = 'none';
            break;
        case 'vo_sso_z':
            dAfterSso.style.display = 'none';
            zAfterSso.style.display = 'block';
            break;
    }
}

