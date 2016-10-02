<?php /* Template Name: Testing Styles Template */ get_header(); ?>
<div class="container full-width">
    <div class="testing">
        <a class="testing-arrow-up testing-scroll-up"><span class="fa fa-chevron-up"></span></a>
        <div class="g-container">
            <div class="testing-sidebar">
                <div class="testing-sidebar-inner">
                    <ul class="testing-menu">
                        <li><a class="test-scroll active" scroll="#headings">Headings</a></li>
                        <li><a class="test-scroll" scroll="#text">Body Text</a></li>
                        <li><a class="test-scroll" scroll="#links">Links</a></li>
                        <li><a class="test-scroll" scroll="#buttons">Buttons</a></li>
                        <li><a class="test-scroll" scroll="#forms">Forms</a></li>
                        <li><a class="test-scroll" scroll="#tables">Tables</a></li>
                        <li><a class="test-scroll" scroll="#lists">Lists</a></li>
                        <li><a class="test-scroll" scroll="#pagination">Pagination</a></li>
                        <li><a class="test-scroll" scroll="#grid">Grid System</a></li>
                    </ul>
                </div>
            </div>
            <div class="testing-body-container">
                <h2 id="headings">Headings</h2>
                <hr>
                <h1>h1 Heading</h1>
                <h2>h2 Heading</h2>
                <h3>h3 Heading</h3>
                <h4>h4 Heading</h4>
                <h5>h5 Heading</h5>
                <h6>h6 Heading</h6>

                <br>
                <h2 id="text">Body Text</h2>
                <hr>    
                <p>Regular body font</p>
                <p class="g-text-color-dark">Dark text color</p>
                <p class="g-text-color-light">Light text color</p>
                <p><strong>Bold body font</strong></p>
                <p><em>Italic body font</em></p>
                <p class="g-font-size-small">Small body font</p>
                <p class="g-font-size-smaller">Smaller body font</p>
                <p class="g-font-size-smallest">Smallest body font</p>
                <p class="g-font-size-large">Large body font</p>
                <p class="g-font-size-larger">Larger body font</p>
                <p class="g-font-size-largest">Largest body font</p>

    <pre><xmp><p>Regular body font</p>
    <p class="g-text-color-dark">Dark text color</p>
    <p class="g-text-color-light">Light text color</p>
    <p><strong>Bold body font</strong></p>
    <p><em>Italic body font</em></p>
    <p class="g-font-size-small">Small body font</p>
    <p class="g-font-size-smaller">Smaller body font</p>
    <p class="g-font-size-smallest">Smallest body font</p>
    <p class="g-font-size-large">Large body font</p>
    <p class="g-font-size-larger">Larger body font</p>
    <p class="g-font-size-largest">Largest body font</p></xmp></pre>

                <h2 id="links">Links</h2>
                <hr>
                <h3><a>Heading Link</a></h3>
                <a>Standard link</a><br>
                <a class="g-link-secondary">Secondary link</a><br>
                <div style="background-color: #5d5d5d; padding: 10px 15px; width: 100%;">
                    <a class="g-link-color-secondary">Secondary Link Color</a>
                </div>

    <pre><xmp><h3><a>Heading Link</a></h3>
    <a>Standard link</a><br>
    <a class="g-link-secondary">Secondary link</a><br>
    <div style="background-color: #5d5d5d; padding: 10px 15px; width: 100%;">
        <a class="g-link-color-secondary">Secondary Link Color</a>
    </div></xmp></pre>

                <h2 id="buttons">Buttons</h2>
                <hr>

                <a class="g-btn">Primary Button</a>
                <a class="g-btn g-active">Active State</a>
                <a class="g-btn g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn g-btn-block">Primary Block Button</a>
                <br><br>
                <a class="g-btn g-btn-lg">Large Button</a>
                <a class="g-btn g-btn-sm">Small Button</a>
                <br><br>
                <a class="g-btn g-btn-secondary">Secondary Button</a>
                <a class="g-btn g-active g-btn-secondary">Active State</a>
                <a class="g-btn g-btn-secondary g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn g-btn-tertiary">Tertiary Button</a>
                <a class="g-btn g-active g-btn-tertiary">Active State</a>
                <a class="g-btn g-btn-tertiary g-disabled">Disabled</a>
                <br><br>
                <a class="g-btn g-btn-quaternary">Quaternary Button</a>
                <a class="g-btn g-active g-btn-quaternary">Active State</a>
                <a class="g-btn g-btn-quaternary g-disabled">Disabled</a>
                
    <pre><xmp><a class="g-btn">Primary Button</a>
    <a class="g-btn g-active">Active State</a>
    <a class="g-btn g-disabled">Disabled</a>
    <br><br>
    <a class="g-btn g-btn-block">Primary Block Button</a>
    <br><br>
    <a class="g-btn g-btn-lg">Large Button</a>
    <a class="g-btn g-btn-sm">Small Button</a>
    <br><br>
    <a class="g-btn g-btn-secondary">Secondary Button</a>
    <a class="g-btn g-active g-btn-secondary">Active State</a>
    <a class="g-btn g-btn-secondary g-disabled">Disabled</a>
    <br><br>
    <a class="g-btn g-btn-tertiary">Tertiary Button</a>
    <a class="g-btn g-active g-btn-tertiary">Active State</a>
    <a class="g-btn g-btn-tertiary g-disabled">Disabled</a>
    <br><br>
    <a class="g-btn g-btn-quaternary">Quaternary Button</a>
    <a class="g-btn g-active g-btn-quaternary">Active State</a>
    <a class="g-btn g-btn-quaternary g-disabled">Disabled</a></xmp></pre>

                <h3>Button Groups</h3>

                <div class="g-btn-group">
                    <a class="g-btn">Option 1</a>
                    <a class="g-btn">Option 2</a>
                    <a class="g-btn">Option 3</a>
                </div>

    <pre><xmp><div class="g-btn-group">
        <a class="g-btn">Option 1</a>
        <a class="g-btn">Option 2</a>
        <a class="g-btn">Option 3</a>
    </div></xmp></pre>

                <h3>Button Toggle</h3>

                <div class="g-btn-toggle">
                    <a class="g-btn btn-secondary g-active">Toggle On</a>
                    <a class="g-btn btn-secondary">Toggle Off</a>
                </div>
                
    <pre><xmp><div class="g-btn-toggle">
        <a class="g-btn btn-secondary g-active">Toggle On</a>
        <a class="g-btn btn-secondary">Toggle Off</a>
    </div></xmp></pre>

                <h2 id="forms">Forms</h2>
                <hr>

                <form>
                    <div class="g-form-group g-error-state">
                        <label for="exampleInput1">First Name:</label>
                        <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                        <p>Please fill out the required field</p>
                    </div>
                    <div class="g-form-group">
                        <label for="exampleInput1">Last Name:</label>
                        <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                    </div>
                    <div class="g-form-group">
                        <label for="exampleQuestion">How can you help you?</label>
                        <textarea rows="3" class="g-form-control" id="exampleQuestion" placeholder="Question"></textarea>
                    </div>
                    <div class="g-form-group g-checkbox">
                        <div class="g-checkbox-heading">Select all that apply:</div>
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1"><span>Check me out</span></label>
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2"><span>Check me out</span></label>
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3"><span>Check me out</span></label>
                    </div>
                    <div class="g-radio-container g-form-group">
                        <div class="g-radio-heading">Please select one:</div>
                        <div>
                            <input id="radio-1" class="g-radio" name="g-radio-group" type="radio" checked>
                            <label for="radio-1" class="g-radio-label">First Choice</label>
                        </div>
                        <div>
                            <input id="radio-2" class="g-radio"name="g-radio-group" type="radio">
                            <label for="radio-2" class="g-radio-label">Second Choice</label>
                        </div>
                        <div>
                            <input id="radio-3" class="g-radio" name="g-radio-group" type="radio">
                            <label for="radio-3" class="g-radio-label">Third Choice</label>
                        </div>
                    </div>
                    <div class="g-form-group">
                        <label>Select one:</label>
                        <select class="g-form-control">
                            <option>Select an option</option>
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>
                    <div class="g-form-group">
                        <div class="g-input-btn">
                            <label>Enter your email</label>
                            <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                            <a class="g-btn">Submit</a>
                        </div>
                    </div>
                </form>

    <pre><xmp><form>
        <div class="g-form-group g-error-state">
            <label for="exampleInput1">First Name:</label>
            <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
            <p>Please fill out the required field</p>
        </div>
        <div class="g-form-group">
            <label for="exampleInput1">Last Name:</label>
            <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
        </div>
        <div class="g-form-group">
            <label for="exampleQuestion">How can you help you?</label>
            <textarea rows="3" class="g-form-control" id="exampleQuestion" placeholder="Question"></textarea>
        </div>
        <div class="g-form-group g-checkbox">
            <div class="g-checkbox-heading">Select all that apply:</div>
            <input type="checkbox" id="checkbox1">
            <label for="checkbox1"><span>Check me out</span></label>
            <input type="checkbox" id="checkbox2">
            <label for="checkbox2"><span>Check me out</span></label>
            <input type="checkbox" id="checkbox3">
            <label for="checkbox3"><span>Check me out</span></label>
        </div>
        <div class="g-radio-container g-form-group">
            <div class="g-radio-heading">Please select one:</div>
            <div>
                <input id="radio-1" class="g-radio" name="g-radio-group" type="radio" checked>
                <label for="radio-1" class="g-radio-label">First Choice</label>
            </div>
            <div>
                <input id="radio-2" class="g-radio"name="g-radio-group" type="radio">
                <label for="radio-2" class="g-radio-label">Second Choice</label>
            </div>
            <div>
                <input id="radio-3" class="g-radio" name="g-radio-group" type="radio">
                <label for="radio-3" class="g-radio-label">Third Choice</label>
            </div>
        </div>
        <div class="g-form-group">
            <label>Select one:</label>
            <select class="g-form-control">
                <option>Select an option</option>
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
        </div>
        <div class="g-form-group">
            <div class="g-input-btn">
                <label>Enter your email</label>
                <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                <a class="g-btn">Submit</a>
            </div>
        </div>
    </form></xmp></pre>

                <h3>Forms using grids</h3>

                <form>
                    <div class="g-hidden-labels">
                        <div class="line">
                            <div class="g-form-group unit size1of2">
                                <label for="exampleInput1">First Name:</label>
                                <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                            </div>
                            <div class="g-form-group unit size1of2">
                                <label for="exampleInput1">Last Name:</label>
                                <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="line">
                            <div class="g-form-group unit size1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option>Select an option</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="g-form-group unit size1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option>Select another option</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                            <div class="g-form-group unit size1of3">
                                <label>Select one:</label>
                                <select class="g-form-control">
                                    <option>Select another option</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="line">
                            <div class="g-form-group unit size1of2">
                                <div class="g-input-btn">
                                    <label for="exampleQuestion">What's your email address?</label>
                                    <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                                    <a class="g-btn">Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

    <pre><xmp><form>
        <div class="g-hidden-labels">
            <div class="line">
                <div class="g-form-group unit size1of2">
                    <label for="exampleInput1">First Name:</label>
                    <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                </div>
                <div class="g-form-group unit size1of2">
                    <label for="exampleInput1">Last Name:</label>
                    <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                </div>
            </div>
            <div class="line">
                <div class="g-form-group unit size1of3">
                    <label>Select one:</label>
                    <select class="g-form-control">
                        <option>Select an option</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="g-form-group unit size1of3">
                    <label>Select one:</label>
                    <select class="g-form-control">
                        <option>Select another option</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div class="g-form-group unit size1of3">
                    <label>Select one:</label>
                    <select class="g-form-control">
                        <option>Select another option</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <div class="line">
                <div class="g-form-group unit size1of2">
                    <div class="g-input-btn">
                        <label for="exampleQuestion">What's your email address?</label>
                        <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                        <a class="g-btn">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </form></xmp></pre>

                <h3>Inline Forms</h3>

                <form>
                    <div class="g-inline-form">
                        <div class="g-form-group">
                            <label for="exampleInput1">First Name:</label>
                            <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                        </div>
                        <div class="g-form-group">
                            <label for="exampleInput1">Last Name:</label>
                            <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                        </div>
                        <div class="g-form-group">
                            <label>Select one:</label>
                            <select class="g-form-control">
                                <option>Select an option</option>
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="mercedes">Mercedes</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="g-form-group">
                            <div class="g-input-btn">
                                <label for="exampleQuestion">What's your email address?</label>
                                <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                                <a class="g-btn">Submit</a>
                            </div>
                        </div>
                        <div class="line">
                            <div class="unit size1of1">
                                <div class="g-form-group g-checkbox">
                                    <div class="g-checkbox-heading">Select all that apply:</div>
                                    <input type="checkbox" id="checkbox4">
                                    <label for="checkbox4"><span>Option 1</span></label>
                                    <input type="checkbox" id="checkbox5">
                                    <label for="checkbox5"><span>Another option</span></label>
                                    <input type="checkbox" id="checkbox6">
                                    <label for="checkbox6"><span>And another!</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="line">
                            <div class="unit size1of1">
                                <div class="g-radio-container g-form-group">
                                    <div class="g-radio-heading">Please select one:</div>
                                    <input id="radio-4" class="g-radio" name="g-radio-group" type="radio" checked>
                                    <label for="radio-4" class="g-radio-label">First Choice</label>
                                    <input id="radio-5" class="g-radio"name="g-radio-group" type="radio">
                                    <label for="radio-5" class="g-radio-label">Second Choice</label>
                                    <input id="radio-6" class="g-radio" name="g-radio-group" type="radio">
                                    <label for="radio-6" class="g-radio-label">Third Choice</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

    <pre><xmp><form>
        <div class="g-inline-form">
            <div class="g-form-group">
                <label for="exampleInput1">First Name:</label>
                <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
            </div>
            <div class="g-form-group">
                <label for="exampleInput1">Last Name:</label>
                <input type="lname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
            </div>
            <div class="g-form-group">
                <label>Select one:</label>
                <select class="g-form-control">
                    <option>Select an option</option>
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
            <div class="g-form-group">
                <div class="g-input-btn">
                    <label for="exampleQuestion">What's your email address?</label>
                    <input type="text" class="g-form-control" id="exampleEmail" placeholder="Email Address">
                    <a class="g-btn">Submit</a>
                </div>
            </div>
            <div class="line">
                <div class="unit size1of1">
                    <div class="g-form-group g-checkbox">
                        <div class="g-checkbox-heading">Select all that apply:</div>
                        <input type="checkbox" id="checkbox4">
                        <label for="checkbox4"><span>Option 1</span></label>
                        <input type="checkbox" id="checkbox5">
                        <label for="checkbox5"><span>Another option</span></label>
                        <input type="checkbox" id="checkbox6">
                        <label for="checkbox6"><span>And another!</span></label>
                    </div>
                </div>
            </div>
            <div class="line">
                <div class="unit size1of1">
                    <div class="g-radio-container g-form-group">
                        <div class="g-radio-heading">Please select one:</div>
                        <input id="radio-4" class="g-radio" name="g-radio-group" type="radio" checked>
                        <label for="radio-4" class="g-radio-label">First Choice</label>
                        <input id="radio-5" class="g-radio"name="g-radio-group" type="radio">
                        <label for="radio-5" class="g-radio-label">Second Choice</label>
                        <input id="radio-6" class="g-radio" name="g-radio-group" type="radio">
                        <label for="radio-6" class="g-radio-label">Third Choice</label>
                    </div>
                </div>
            </div>
        </div>
    </form></xmp></pre>
                
                <h3>Horizontal Forms</h3>

                <form>
                    <div class="g-form-horizontal">
                        <div class="g-form-group line">
                            <label class="unit size1of5" for="exampleInput1">First Name:</label>
                            <div class="unit size4of5">
                                <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                            </div>
                        </div>
                        <div class="g-form-group line">
                            <div class="unit size1of5">
                                <label for="exampleInput2">Last Name:</label>
                            </div>
                            <div class="unit size4of5">
                                <input type="fname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="g-form-group line">
                            <div class="unit size1of5">
                                <label>Select one:</label>
                            </div>
                            <div class="unit size4of5">
                                <select class="g-form-control">
                                    <option>Select an option</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="g-form-group line">
                            <div class="unit size1of5">
                                <div class="g-checkbox-heading">Select all that apply:</div>
                            </div>
                            <div class="unit size4of5">
                                <div class="g-checkbox">  
                                    <input type="checkbox" id="checkbox7">
                                    <label for="checkbox7"><span>Option 1</span></label>
                                    <input type="checkbox" id="checkbox8">
                                    <label for="checkbox8"><span>Another option</span></label>
                                    <input type="checkbox" id="checkbox9">
                                    <label for="checkbox9"><span>And another!</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="g-form-group line">
                            <div class="unit size1of5">
                                <div class="g-radio-heading">Please select one:</div>
                            </div>
                            <div class="unit size4of5">
                                <div class="g-radio-container">
                                    <input id="radio-7" class="g-radio" name="g-radio-group" type="radio" checked>
                                    <label for="radio-7" class="g-radio-label">First Choice</label>
                                    <input id="radio-8" class="g-radio"name="g-radio-group" type="radio">
                                    <label for="radio-8" class="g-radio-label">Second Choice</label>
                                    <input id="radio-9" class="g-radio" name="g-radio-group" type="radio">
                                    <label for="radio-9" class="g-radio-label">Third Choice</label>
                                </div>
                            </div>
                        </div>
                         <div class="g-form-group line">
                            <div class="unit size1of5">
                                <div class="g-radio-heading">Inline example:</div>
                            </div>
                            <div class="unit size4of5 g-inline-form">
                                <div class="g-radio-container">
                                    <input id="radio-10" class="g-radio" name="g-radio-group" type="radio" checked>
                                    <label for="radio-10" class="g-radio-label">First Choice</label>
                                    <input id="radio-11" class="g-radio"name="g-radio-group" type="radio">
                                    <label for="radio-11" class="g-radio-label">Second Choice</label>
                                    <input id="radio-12" class="g-radio" name="g-radio-group" type="radio">
                                    <label for="radio-12" class="g-radio-label">Third Choice</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

    <pre><xmp><form>
        <div class="g-form-horizontal">
            <div class="g-form-group line">
                <label class="unit size1of5" for="exampleInput1">First Name:</label>
                <div class="unit size4of5">
                    <input type="fname" class="g-form-control" id="exampleInput1" placeholder="First Name">
                </div>
            </div>
            <div class="g-form-group line">
                <div class="unit size1of5">
                    <label for="exampleInput2">Last Name:</label>
                </div>
                <div class="unit size4of5">
                    <input type="fname" class="g-form-control" id="exampleInput2" placeholder="Last Name">
                </div>
            </div>
            <div class="g-form-group line">
                <div class="unit size1of5">
                    <label>Select one:</label>
                </div>
                <div class="unit size4of5">
                    <select class="g-form-control">
                        <option>Select an option</option>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
            </div>
            <div class="g-form-group line">
                <div class="unit size1of5">
                    <div class="g-checkbox-heading">Select all that apply:</div>
                </div>
                <div class="unit size4of5">
                    <div class="g-checkbox">  
                        <input type="checkbox" id="checkbox7">
                        <label for="checkbox7"><span>Option 1</span></label>
                        <input type="checkbox" id="checkbox8">
                        <label for="checkbox8"><span>Another option</span></label>
                        <input type="checkbox" id="checkbox9">
                        <label for="checkbox9"><span>And another!</span></label>
                    </div>
                </div>
            </div>
            <div class="g-form-group line">
                <div class="unit size1of5">
                    <div class="g-radio-heading">Please select one:</div>
                </div>
                <div class="unit size4of5">
                    <div class="g-radio-container">
                        <input id="radio-7" class="g-radio" name="g-radio-group" type="radio" checked>
                        <label for="radio-7" class="g-radio-label">First Choice</label>
                        <input id="radio-8" class="g-radio"name="g-radio-group" type="radio">
                        <label for="radio-8" class="g-radio-label">Second Choice</label>
                        <input id="radio-9" class="g-radio" name="g-radio-group" type="radio">
                        <label for="radio-9" class="g-radio-label">Third Choice</label>
                    </div>
                </div>
            </div>
             <div class="g-form-group line">
                <div class="unit size1of5">
                    <div class="g-radio-heading">Inline example:</div>
                </div>
                <div class="unit size4of5 g-inline-form">
                    <div class="g-radio-container">
                        <input id="radio-10" class="g-radio" name="g-radio-group" type="radio" checked>
                        <label for="radio-10" class="g-radio-label">First Choice</label>
                        <input id="radio-11" class="g-radio"name="g-radio-group" type="radio">
                        <label for="radio-11" class="g-radio-label">Second Choice</label>
                        <input id="radio-12" class="g-radio" name="g-radio-group" type="radio">
                        <label for="radio-12" class="g-radio-label">Third Choice</label>
                    </div>
                </div>
            </div>
        </div>
    </form></xmp></pre>

                <h2 id="tables">Tables</h2>
                <hr>

                <table class="g-table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

    <pre><xmp><table class="g-table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table></xmp></pre>

                <table class="g-table g-table-striped g-table-bordered g-table-hover">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>

    <pre><xmp><table class="g-table g-table-striped g-table-bordered g-table-hover">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table></xmp></pre>

                <h2 id="lists">Lists</h2>
                <hr>

                <ul>
                    <li>Huron County</li>
                    <li>Ontario’s West Coast</li>
                    <li>Invest in Huron</li>
                    <li>Creative Huron
                        <ul>
                            <li>Nested Item</li>
                            <li>Nested Item 2</li>
                        </ul>
                    </li>
                    <li>Make Huron Home</li>
                </ul>

    <pre><xmp><ul>
        <li>Huron County</li>
        <li>Ontario’s West Coast</li>
        <li>Invest in Huron</li>
        <li>Creative Huron
            <ul>
                <li>Nested Item</li>
                <li>Nested Item 2</li>
            </ul>
        </li>
        <li>Make Huron Home</li>
    </ul></xmp></pre>

                <ol>
                    <li>Coffee</li>
                    <li>Milk
                        <ol>
                            <li>Skim Milk</li>
                            <li>Almond Milk</li>
                        </ol>
                    </li>
                    <li>Tea</li>
                </ol>
                
    <pre><xmp><ol>
        <li>Coffee</li>
        <li>Milk
            <ol>
                <li>Skim Milk</li>
                <li>Almond Milk</li>
            </ol>
        </li>
        <li>Tea</li>
    </ol></xmp></pre>

                <h2 id="pagination">Pagination</h2>
                <hr>  

                <div class="g-pagination">
                    <a class="g-prev g-disabled"><</a>
                    <a class="g-nums g-active">1</a>
                    <a class="g-nums">2</a>
                    <a class="g-nums">3</a>
                    <a class="g-nums">4</a>
                    <a class="g-nums">5</a>
                    <a class="g-next">></a>
                </div>

    <pre><xmp><div class="g-pagination">
        <a class="g-prev g-disabled"><span class="fa fa-angle-left"></span></a>
        <a class="g-nums g-active">1</a>
        <a class="g-nums">2</a>
        <a class="g-nums">3</a>
        <a class="g-nums">4</a>
        <a class="g-nums">5</a>
        <a class="g-next"><span class="fa fa-angle-right"></span></a>
    </div></xmp></pre>

                <h2 id="grid">Grid System</h2>
                <hr>  

                <div class="line margin-bottom">
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                </div>

                <div class="line margin-bottom">
                    <div class="size1of5 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of5 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of5 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of5 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of5 unit">
                        <div class="line">
                            <div class="size1of2 sm-size1of2 unit">
                                <div class="testing-unit"></div>
                            </div>
                            <div class="size1of2 sm-size1of2 unit">
                                <div class="testing-unit"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="line margin-bottom">
                    <div class="size1of4 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of4 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of4 xs-size1of2 unit">
                        <div class="line">
                            <div class="size1of2 sm-size1of2 unit">
                                <div class="testing-unit"></div>
                            </div>
                            <div class="size1of2 sm-size1of2 unit">
                                <div class="line">
                                    <div class="size1of2 unit">
                                        <div class="line">
                                            <div class="size1of2 sm-size1of2 xs-size1of2 unit">
                                                <div class="testing-unit"></div>
                                            </div>
                                            <div class="size1of2 sm-size1of2 xs-size1of2 unit">
                                                <div class="testing-unit"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="size1of2 unit">
                                        <div class="testing-unit"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="size1of4 xs-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                </div>

        <pre><xmp><div class="line margin-bottom">
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
        </div>

        <div class="line margin-bottom">
            <div class="size1of5 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of5 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of5 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of5 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of5 unit">
                <div class="line">
                    <div class="size1of2 sm-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of2 sm-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="line margin-bottom">
            <div class="size1of4 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of4 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of4 xs-size1of2 unit">
                <div class="line">
                    <div class="size1of2 sm-size1of2 unit">
                        <div class="testing-unit"></div>
                    </div>
                    <div class="size1of2 sm-size1of2 unit">
                        <div class="line">
                            <div class="size1of2 unit">
                                <div class="line">
                                    <div class="size1of2 sm-size1of2 xs-size1of2 unit">
                                        <div class="testing-unit"></div>
                                    </div>
                                    <div class="size1of2 sm-size1of2 xs-size1of2 unit">
                                        <div class="testing-unit"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="size1of2 unit">
                                <div class="testing-unit"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="size1of4 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
        </div></xmp></pre>

            <h3>Smaller Gutter</h3>

            <div class="line line-sm margin-bottom">
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
            </div>

        <pre><xmp><div class="line line-sm margin-bottom">
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
        </div></xmp></pre>

            <h4>Tablet</h4>

            <div class="line line-sm-tablet margin-bottom">
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
            </div>

        <pre><xmp><div class="line line-sm-tablet margin-bottom">
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
        </div></xmp></pre>

            <h4>Mobile</h4>

            <div class="line line-sm-mobile margin-bottom">
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
                <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                    <div class="testing-unit"></div>
                </div>
            </div>

        <pre><xmp><div class="line line-sm-mobile margin-bottom">
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
            <div class="size1of6 sm-size1of3 xs-size1of2 unit">
                <div class="testing-unit"></div>
            </div>
        </div></xmp></pre>

            <h4>No Gutter</h4>
            <div class="line no-gutter">
                <div class="size1of4 sm-size1of2 xs-size1of2 unit">
                    <div style="background: url(http://farm1.staticflickr.com/313/19831416459_5ddd26103e_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

                    </div>
                </div>
                <div class="size1of4 sm-size1of2 xs-size1of2 unit">
                    <div style="background: url(http://farm6.staticflickr.com/5444/17679973232_568353a624_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

                    </div>
                </div>
                <div class="size1of4 sm-size1of2 xs-size1of2 unit">
                    <div style="background: url(http://farm8.staticflickr.com/7367/16426879675_e32ac817a8_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

                    </div>
                </div>
                <div class="size1of4 sm-size1of2 xs-size1of2 unit">
                    <div style="background: url(http://farm6.staticflickr.com/5612/15344856989_449794889d_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

                    </div>
                </div>
            </div>

    <pre><xmp><div class="line no-gutter">
        <div class="size1of4 sm-size1of2 xs-size1of2 unit">
            <div style="background: url(http://farm1.staticflickr.com/313/19831416459_5ddd26103e_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

            </div>
        </div>
        <div class="size1of4 sm-size1of2 xs-size1of2 unit">
            <div style="background: url(http://farm6.staticflickr.com/5444/17679973232_568353a624_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

            </div>
        </div>
        <div class="size1of4 sm-size1of2 xs-size1of2 unit">
            <div style="background: url(http://farm8.staticflickr.com/7367/16426879675_e32ac817a8_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

            </div>
        </div>
        <div class="size1of4 sm-size1of2 xs-size1of2 unit">
            <div style="background: url(http://farm6.staticflickr.com/5612/15344856989_449794889d_m.jpg) center center; background-size: cover; height: 200px; width: 100%; display: block;">

            </div>
        </div>
    </div></xmp></pre>


            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<script>

jQuery(document).ready(function($){

    //testing only
    $('.testing-scroll-up').click(function(e){
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");  
    });

    $('.test-scroll').click(function(e){
        var id = $(e.target).attr('scroll');
        var that = $(this);
        $('html,body').animate({
            scrollTop: $(id).offset().top - 30
        }, function() {
            $('.test-scroll').removeClass('active');
            that.addClass('active');
        });

    });

    $(document).scroll(function(){
        var scrollPosition = $(document).scrollTop() - 40;
        $('.test-scroll').each(function () {
            var currentLink = $(this);
            var refElement = $(currentLink.attr("scroll"));
            if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
                $('.test-scroll').removeClass("active");
                currentLink.addClass("active");
            }
        });
    });
})

</script>