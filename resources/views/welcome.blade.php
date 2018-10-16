<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <meta name="viewport" content="initial-scale=1, user-scalable=no">
    <title>Student Grade Table</title>
</head>

<body>
    <div class="col-sm-12">
        <div class="col-sm-12">
            <h1 class="d-none d-sm-block order-1">Student Grade Table
                <div class="input-group col-xl-5 d-xl-inline-flex col-lg-3 d-lg-inline-flex d-none">
                    <input type="text" class="form-control searchBar" placeholder="Search" aria-label="searchBar" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success searchBarBtn rounded-right" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="invalid-feedback">
                        <h6 class="searchFailMsg">Please search for valid terms.</h6>
                    </div>
                    <div class="valid-feedback">
                        <h6 class="searchSuccessMsg"></h6>
                    </div>
                </div>
                <small class="text-right order-2 float-right">Grade Average:
                    <span class="avgGrade badge badge-secondary">0</span>
                </small>
            </h1>
            <h3 class="d-block d-sm-none order-1">Student Grade Table
                <small class="text-nowrap order-2 mobileGradeAvg">Grade Average:
                    <span class="avgGrade badge badge-secondary">0</span>
                </small>
            </h3>
        </div>
        <div class="input-group col-12 col-sm-12 col-md-12 d-lg-none d-xl-none mt-1">
            <input type="text" class="form-control mobileSearchBar" placeholder="Search" aria-label="searchBar" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-success mobileSearchBtn rounded-right" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="invalid-feedback">
                <h6 class="mobileSearchFailMsg">Please search for valid terms.</h6>
            </div>
            <div class="valid-feedback">
                <h6 class="mobileSearchSuccessMsg"></h6>
            </div>
        </div>
        <div class="student-add-form col-lg-2 col-12 float-lg-right form-group">
            <h4>Add Student</h4>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                </div>
                <input type="text" class="form-control rounded-right" name="studentName" id="studentName" placeholder="Name">
                <div class="invalid-feedback">
                    Please input a valid name.
                </div>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text rounded-right" id="basic-addon1">
                        <i class="fas fa-book"></i>
                    </span>
                </div>
                <input type="text" class="form-control rounded-right" name="course" id="course" placeholder="Course">
                <div class="invalid-feedback">
                    Please input a valid course.
                </div>
            </div>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-pencil-ruler"></i>
                    </span>
                </div>
                <input type="text" class="form-control rounded-right" name="studentGrade" id="studentGrade" placeholder="Grade">
                <div class="invalid-feedback">
                    Please input a valid grade.
                </div>
            </div>
            <button type="button" class="btn btn-success btnAdd mb-1" onclick="">Add</button>
            <button type="button" class="btn btn-secondary btnCancel mb-1" onclick="">Cancel</button>
            <button type="button" class="btn btn-primary btnGetData mb-1" onclick="">Refresh</button>
        </div>
        <div class="student-list-container col-lg-10 col-12">
            <table class="student-list table">
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Student Course</th>
                        <th>Student Grade</th>
                        <th id="toolsTH">Tools</th>
                    </tr>
                </thead>
                <tbody class="studentTBody">
                </tbody>
            </table>
        </div>

        <div class="pagAndGoTo row">
            <nav aria-label="Student list">
                <ul class="pagination">
                    <li class="page-item page-item-one">
                        <a class="page-link firstPage">First</a>
                    </li>
                    <li class="page-item page-item-two active">
                        <a class="page-link navPage navPageOne">1</a>
                    </li>
                    <li class="page-item page-item-three">
                        <a class="page-link navPage navPageTwo">2</a>
                    </li>
                    <li class="page-item page-item-four">
                        <a class="page-link navPage navPageThree">3</a>
                    </li>
                    <li class="page-item page-item-five">
                        <a class="page-link navPage navPageFour">4</a>
                    </li>
                    <li class="page-item page-item-six">
                        <a class="page-link navPage navPageFive">5</a>
                    </li>
                    <li class="page-item page-item-seven">
                        <a class="page-link lastPage">Last</a>
                    </li>
                </ul>
            </nav>

            <div class="input-group col-lg-3 col-9 mb-3">
                <input type="number" class="form-control goToPage" placeholder="Go To Page" aria-label="gotopage" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary goToPageBtn rounded-right" type="button" id="button-addon2">Enter</button>
                </div>
                <div class="invalid-feedback">
                    Please input a valid page number.
                </div>
            </div>
        </div>
    </div>

</body>

</html>
