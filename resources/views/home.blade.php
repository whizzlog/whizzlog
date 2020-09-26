@extends('layouts.app')

@section('content')
 <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Verified Bank Logs</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Bank Name</th>
                    <th scope="col" class="sort" data-sort="budget">Balance</th>
                    <th scope="col" class="sort" data-sort="status">BTC Compatible</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="sort" data-sort="completion"></th>
                  </tr>
                </thead>
                                                  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $7,297.34 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $620 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1501" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="7,297.34" hidden>
                                            <input name="logprice" type="text" value="620" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $9,306.50 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $810 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1502" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="9,306.50" hidden>
                                            <input name="logprice" type="text" value="810" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assets/img/theme/cb.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $12,850.58 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $970 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1503" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="12,850.58" hidden>
                                            <input name="logprice" type="text" value="970" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assets/img/theme/cb.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $6,964.92 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $610 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1504" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="6,964.92" hidden>
                                            <input name="logprice" type="text" value="610" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assets/img/theme/cb.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $6,758.81 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $580 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1505" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="6,758.81" hidden>
                                            <input name="logprice" type="text" value="580" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assets/img/theme/cb.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $11,837.78 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $930 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1506" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="11,837.78" hidden>
                                            <input name="logprice" type="text" value="930" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $10,366.32 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $900 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1507" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="10,366.32" hidden>
                                            <input name="logprice" type="text" value="900" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $8,372.08 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $790 USD
                    </td>
                    <td>
                      <div class="d-flex align-items-center">
                                            <input name="logid" type="text" value="1508" hidden>
                                            <input name="banknames" type="text" value="Centennial Bank, Arkansas" hidden>
                                            <input name="accbal" type="text" value="8,372.08" hidden>
                                            <input name="logprice" type="text" value="790" hidden>
                                            <button class="btn btn-sm btn-neutral" type="submit" name="buylog">Buy Log</button>                        <div>
                        </div>
                      </div>
                    </td>

                  </tr>
                  </form>
                </tbody>              </table>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Recently Sold Bank Logs</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Bank Name</th>
                    <th scope="col" class="sort" data-sort="budget">Balance</th>
                    <th scope="col" class="sort" data-sort="status">BTC Compatible</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="sort" data-sort="completion">Time Sold</th>
                  </tr>
                </thead>
                                                  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $9,128.43 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $805 USD
                    </td>
                    <td>
                      Few moments ago
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $11,694.75 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $924 USD
                    </td>
                    <td>
                      Few moments ago
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="assets/img/theme/cb.jpg">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $8,244.32 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $786 USD
                    </td>
                    <td>
                      Few moments ago
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $8,675.32 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $798 USD
                    </td>
                    <td>
                      Few moments ago
                    </td>

                  </tr>
                  </form>
                </tbody>  
                <tbody class="list">
                  <form  action="logpay.php" method="post">
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="{{ asset('assets/img/theme/cb.jpg') }}">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">Centennial Bank, Arkansas</span>
                        </div>
                      </div>
                    </th>
                    <td class="budget">
                      $12,887.54 USD
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i>
                        <span class="status">Yes</span>
                      </span>
                    </td>
                    <td>
                      $969 USD
                    </td>
                    <td>
                      Few moments ago
                    </td>

                  </tr>
                  </form>
                </tbody>              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
