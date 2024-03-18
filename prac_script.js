{/* <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
    <div class="package-item">
        <div class="overflow-hidden">
            <img class="img-fluid" src="${doc.img}" alt="">
        </div>
        <div class="d-flex border-bottom">
            <small class="flex-fill text-center border-end py-2"><i
                class="fa fa-map-marker-alt text-primary me-2"></i>${doc.place}</small>
            <small class="flex-fill text-center border-end py-2"><i
                class="fa fa-calendar-alt text-primary me-2"></i>${doc.days}</small>
            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>${doc.person}</small>
        </div>
        <div class="text-center p-4">
            <h3 class="mb-0">${doc.price}</h3>
            <div class="mb-3">
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
                <small class="fa fa-star text-primary"></small>
            </div>
            <p>${doc.description}</p>
            <div class="d-flex justify-content-center mb-2">
                <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                    style="border-radius: 30px 0 0 30px;">Read More</a>
                <a href="#" class="btn btn-sm btn-primary px-3"
                    style="border-radius: 0 30px 30px 0;">Book Now</a>
            </div>
        </div>
    </div>
</div> */}


    // fetch('package.php')
    //     .then(response => response.json())
    //     .then(data => {
    //         let count=0;
    //         let arr = new Array();
    //         data.forEach(doc => {
    //             count++;
    //             arr.push(``);
    //         });
    //         const field = document.getElementById("pack-body");
    //         field.innerHTML = arr.join("");
    //     })
    //     .catch(error => console.error('Error fetching data:', error));


//-----------package dynamic code-------------------------------

fetch('package.php')
    .then(response => response.json())
    .then(data => {
        // Process the data and update the HTML
        const mainDiv = document.getElementById('pack-field');
        let arr = new Array();
        console.log(data)
        data.forEach(doc => {
            arr.push(`<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="package-item">
                <div class="overflow-hidden">
                    <img class="img-fluid" src="${doc.img}" alt="">
                </div>
                <div class="d-flex border-bottom">
                    <small class="flex-fill text-center border-end py-2"><i
                        class="fa fa-map-marker-alt text-primary me-2"></i>${doc.place}</small>
                    <small class="flex-fill text-center border-end py-2"><i
                        class="fa fa-calendar-alt text-primary me-2"></i>${doc.days}</small>
                    <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>${doc.person}</small>
                </div>
                <div class="text-center p-4">
                    <h3 class="mb-0">${doc.price}</h3>
                    <div class="mb-3">
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                        <small class="fa fa-star text-primary"></small>
                    </div>
                    <p>${doc.description}</p>
                    <div class="d-flex justify-content-center mb-2">
                        <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                            style="border-radius: 30px 0 0 30px;">Read More</a>
                        <a href="#" class="btn btn-sm btn-primary px-3"
                            style="border-radius: 0 30px 30px 0;">Book Now</a>
                    </div>
                </div>
            </div>
        </div>`);
        });
        for(i=0; i<$doc.rating; i++){
            return (<small class="fa fa-star text-primary"></small>);
        }
        console.log(arr)
        document.getElementById("pack-field").innerHTML = arr.join("");
    })

    .catch(error => console.error('Error fetching data:', error));




//-----------service dynamic code-------------------------------
fetch('service.php')
    .then(response => response.json())
    .then(data => {
        // Process the data and update the HTML
        const mainDiv = document.getElementById('serv-field');
        let arr = new Array();
        console.log(data)
        data.forEach(doc => {
            arr.push(`<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="service-item rounded pt-3">
            <div class="p-4">
                <i class="${doc.iconClass} text-primary mb-4"></i>
                <h5>${doc.tittle}</h5>
                <p>${doc.description}</p>
            </div>
        </div>
    </div>`);
        });
        console.log(arr)
        document.getElementById("serv-field").innerHTML = arr.join("");
    })

    .catch(error => console.error('Error fetching data:', error));

//--------------------destination dynamic code---------------------------------------------
// Fetch data from the PHP script
fetch('destination.php')
    .then(response => response.json())
    .then(data => {
        // Process the data and update the HTML
        // const mainDiv = document.getElementById('img-field');
        let arr = new Array();
        console.log(data)
        data.forEach(doc => {
            // Assuming data is an object with properties like title and description
            arr.push(`<div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                            <a class="position-relative d-block overflow-hidden" href="">
                                                <img class="img-fluid des-2" src="${doc.img}" alt="">
                                                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2" id="per2">${doc.per}</div>
                                                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2" id="loc2">${doc.loc}</div>
                                            </a>
                                        </div>`);

        });
        console.log(arr)
        document.getElementById("img-field").innerHTML = arr.join("");
    })

    .catch(error => console.error('Error fetching data:', error));

//--------------------------------


