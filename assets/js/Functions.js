function getCrime(c) {
var crime;
if (c == '1') {
crime = "stealing";
} else if (c == '2') {
crime = "beating";
} else if (c == '3') {
crime = "rape";
} else if (c == '4') {
crime = "cultism";
} else if (c == '5') {
crime = "debt";
} else if (c == '6') {
crime = "conversion";
} else if (c == '7') {
crime = "shooting";
} else if (c == '7') {
crime = "stabing";
} else if (c == '7') {
crime = "robbing";
} else if (c == '7') {
crime = "malpractice";
} else if (c == '7') {
crime = "abuse/volga language";
}
return crime;
}

function getAxis(a) {
    var axis;
    if (a == '1') {
        axis = "North Core";
    } else if (a == '2') {
        axis = "South Core";
    } else if (a == '3') {
        axis = "Central Core";
    }
    return axis;
}


function getStatus(s) {
    var status;
    if (s == '1') {
        status = '<a href="# " class="status_btn yellow_btn">Pending</a>';
    } else if (s == '2') {
        status = '<a href="# " class="status_btn ">Processed</a>';
    }
    return status
}