@section('learning')
<div class="tab-pane fade" id="learning" role="tabpanel" aria-labelledby="learning-tab">
                                    <div class="learning-wrap">
                                        <div class="row">
                                          <div class="col-md-12">
                                            <h2 class="heading-grey text-center">
                                              Performance of the District in Learning Outcomes (LOs)
                                            </h2>
                                            <div class="learning-tabs mtb-30">
                                              <ul class="nav nav-tabs" id="learningTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="language-tab" data-bs-toggle="tab" data-bs-target="#language" type="button" role="tab" aria-controls="language" aria-selected="false">language</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="math-tab" data-bs-toggle="tab" data-bs-target="#math" type="button" role="tab" aria-controls="math" aria-selected="false">Mathematics</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                  <button class="nav-link" id="evs-tab" data-bs-toggle="tab" data-bs-target="#evs" type="button" role="tab" aria-controls="evs" aria-selected="false">EVS</button>
                                                </li>
                                              </ul>
                                              <div class="tab-content" id="learningTabContent">
                                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>L304</td>
                                                            <td>Reads small texts with comprehension i.e., identifies main ideas, details, sequence and draws conclusions</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-blue">
                                                            <td>L312</td>
                                                            <td>Reads printed scripts on the classroom walls: poems, posters, charts etc</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>M301</td>
                                                            <td>Reads and writes numbers up to 999 using place value</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M302</td>
                                                            <td>Compares numbers up to 999 based on their place values</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>M303</td>
                                                            <td>Solves simple daily life problems using addition and subtraction of three digit numbers with and without regrouping</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M304</td>
                                                            <td>Constructs and uses the multiplication facts (up till 10) in daily life situations</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>M305</td>
                                                            <td>Analyses and applies an appropriate number operation in the situation/ context</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M306</td>
                                                            <td>Explains the meaning of division facts by equal grouping/sharing and finds it by repeated subtraction</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>E302</td>
                                                            <td>Identifies simple features (e.g. movement, at places found/ kept, eating habits, sounds) of animals and birds in the immediate surroundings.</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E303</td>
                                                            <td>Identifies relationships with and among family members</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>E304</td>
                                                            <td>Identifies objects, signs (vessels, stoves, transport, means of communication, transport, signboards), places (types of houses/shelters, bus stand, petrol pump) activities..</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E305</td>
                                                            <td>Describes need of food for people of different age groups, animals/birds, availability of food and water and use of water at home and surroundings</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>E306</td>
                                                            <td>Groups objects, birds, animals, features, activities according to differences/similarities using different senses. (e.g. appearance/place of living/ food/ movement/ likes-dislikes...</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E307</td>
                                                            <td>Identifies directions, location of objects/places in simple maps using signs/symbols/verbally</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-blue">
                                                        <img src="{{asset('assets/front/images/globe-icon.svg')}}" alt="icon" class="img-fluid" /> Language
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-blue">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>L304</td>
                                                            <td>Reads small texts with comprehension i.e., identifies main ideas, details, sequence and draws conclusions</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-blue">
                                                            <td>L312</td>
                                                            <td>Reads printed scripts on the classroom walls: poems, posters, charts etc</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                   
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="math" role="tabpanel" aria-labelledby="math-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-pink">
                                                        <img src="{{asset('assets/front/images/math-icon.svg')}}" alt="icon" class="img-fluid" /> Mathematics
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-pink">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>M301</td>
                                                            <td>Reads and writes numbers up to 999 using place value</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M302</td>
                                                            <td>Compares numbers up to 999 based on their place values</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>M303</td>
                                                            <td>Solves simple daily life problems using addition and subtraction of three digit numbers with and without regrouping</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M304</td>
                                                            <td>Constructs and uses the multiplication facts (up till 10) in daily life situations</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>M305</td>
                                                            <td>Analyses and applies an appropriate number operation in the situation/ context</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-pink">
                                                            <td>M306</td>
                                                            <td>Explains the meaning of division facts by equal grouping/sharing and finds it by repeated subtraction</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="tab-pane fade" id="evs" role="tabpanel" aria-labelledby="evs-tab">
                                                  <div class="learning-table-wrap">
                                                    <h2 class="table-title card-yellow">
                                                        <img src="{{asset('assets/front/images/evs-icon.svg')}}" alt="icon" class="img-fluid" /> EVS
                                                    </h2>
                                                    <div class="learning-table">
                                                      <table class="table">
                                                        <thead class="thead-yellow">
                                                          <tr>
                                                            <th scope="col">LO Code</th>
                                                            <th scope="col">Learning Outcome for Class 3</th>
                                                            <th scope="col">District</th>
                                                            <th scope="col">State</th>
                                                            <th scope="col">National</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td>E302</td>
                                                            <td>Identifies simple features (e.g. movement, at places found/ kept, eating habits, sounds) of animals and birds in the immediate surroundings.</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E303</td>
                                                            <td>Identifies relationships with and among family members</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>E304</td>
                                                            <td>Identifies objects, signs (vessels, stoves, transport, means of communication, transport, signboards), places (types of houses/shelters, bus stand, petrol pump) activities..</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E305</td>
                                                            <td>Describes need of food for people of different age groups, animals/birds, availability of food and water and use of water at home and surroundings</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                          <tr>
                                                            <td>E306</td>
                                                            <td>Groups objects, birds, animals, features, activities according to differences/similarities using different senses. (e.g. appearance/place of living/ food/ movement/ likes-dislikes...</td>
                                                            <td>70</td>
                                                            <td>40</td>
                                                            <td>50</td>
                                                          </tr>
                                                          <tr class="light-yellow">
                                                            <td>E307</td>
                                                            <td>Identifies directions, location of objects/places in simple maps using signs/symbols/verbally</td>
                                                            <td>30</td>
                                                            <td>60</td>
                                                            <td>45</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>   
@endsection