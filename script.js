function toggleLocation(postApplied) {
    var jobLocation = document.getElementById("job_location");
    var salesEngineerLocation = document.getElementById("sales_engineer_location");
    if (postApplied === 'telecalling' || postApplied === 'scm') {
        jobLocation.style.display = 'block';
        salesEngineerLocation.style.display = 'none';
    } else if (postApplied === 'sales_engineer') {
        jobLocation.style.display = 'none';
        salesEngineerLocation.style.display = 'block';
    } else {
        jobLocation.style.display = 'none';
        salesEngineerLocation.style.display = 'none';
    }
}
