<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h3>Vedanta Math Donation Form</h3>
    </header>
    <div id="container">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="id" class="form-label">ID</label>
                <input type="number" class="form-control" id="id" placeholder="1">
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Ramakrishna Vedanta Math" required>
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="+91 9831509234" required>
            </div>
            <div class="col-12">
                <label for="addr" class="form-label">Address</label>
                <input type="text" class="form-control" id="addr" placeholder="19-A & B, Raja Rajkrishna Street">
            </div>
            <div class="col-4">
                <label for="state" class="form-label">State</label>
                <input type="text" class="form-control" id="state" placeholder="West Bengal">
            </div>
            <div class="col-4">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="Kolkata">
            </div>
            <div class="col-4">
                <label for="pin" class="form-label">Pincode</label>
                <input type="number" class="form-control" id="pin" placeholder="700006">
            </div>
            <div class="col-4">
                <label for="uplId" class="form-label">ID</label>
                <select class="form-select" id="uplId" required>
                    <option selected disabled value="">Choose ID</option>
                    <option>Aadhar Card</option>
                    <option>Pan Card</option>
                    <option>Voter Card</option>
                </select>
            </div>
            <div class="col-8   ">
                <label for="Upload" class="form-label">Upload Documents</label>
                <input class="form-control" type="file" id="Upload">
            </div>
            <div class="col-4">
                <label for="uplId" class="form-label">ID</label>
                <select class="form-select" id="uplId" required>
                    <option selected disabled value="">Choose ID</option>
                    <option>Aadhar Card</option>
                    <option>Pan Card</option>
                    <option>Voter Card</option>
                </select>
            </div>
            <div class="col-8   ">
                <label for="Upload" class="form-label">Upload Documents</label>
                <input class="form-control" type="file" id="Upload">
            </div>
            <div class="col-4">
                <label for="uplId" class="form-label">ID</label>
                <select class="form-select" id="uplId" required>
                    <option selected disabled value="">Choose ID</option>
                    <option>Aadhar Card</option>
                    <option>Pan Card</option>
                    <option>Voter Card</option>
                </select>
            </div>
            <div class="col-8   ">
                <label for="Upload" class="form-label">Upload Documents</label>
                <input class="form-control" type="file" id="Upload">
            </div>
            <div class="col-md-6">
                <label for="receipt" class="form-label">Receipt No</label>
                <input type="text" class="form-control" id="receipt" placeholder="ABC123" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>