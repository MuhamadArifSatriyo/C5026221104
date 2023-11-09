<html>
    <head>
        <title>BS4_Dropdowns</title>
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <body>
        <h2>Split Button Dropdowns</h2>
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Split button</button>
            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Hai</a>
              <a class="dropdown-item" href="#">hallo</a>
            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Tanpa split button</button>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Hai</a>
              <a class="dropdown-item" href="#">halo</a>
            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-success">Success Dropdowns</button>
            <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Succes button</a>
              <a class="dropdown-item" href="#">hijau</a>
            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
            </button>
            <div class="dropdown-menu">
              <div class="dropdown-item-text">We use this extra class to reduce the horizontal padding on either side of the caret by 25% and remove the margin-left that’s added for regular button dropdowns.</div>
            </div>
          </div>

          <div class="btn-group">
            <button type="button" class="btn btn-secondary">Cara split button</button>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
            </button>
            <div class="dropdown-menu">
                <div class="dropdown-item-text">add dropdown-toggle-split. lebih lengkapnya di link berikut</div>
                <a class="dropdown-item" href="https://getbootstrap.com/docs/4.0/components/dropdowns/">Bootstrap Dropdowns</a>
            </div>
            </div>
            <br>
            <h2>Vertical Button Group w/ Dropdown</h2>
            <div class="btn-group-vertical">
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary">Cara split button</button>
                    <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item">hallo</a>
                        <a class="dropdown-item">cat</a>
                    </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Info</button>
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu">
                          <div class="dropdown-item-text">class dropdown yang membuat button dropdown vertikal kebawah</div>
                        </div>
                      </div>
                      <div class="btn-group">
                        <button type="button" class="btn btn-primary">Namaku</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item">Muhamad</a>
                          <a class="dropdown-item">Arif</a>
                          <a class="dropdown-item">Satriyo</a>
                        </div>
                      </div>
                </div>
    </body>
</html>
