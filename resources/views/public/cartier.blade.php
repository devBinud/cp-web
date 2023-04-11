@extends('public.layouts.layout')
@section('title', 'Codepilot | Cartier')
@section('body')

    <main id="main">
        <div class="aboutmainbody">
            <div class="blogcontain">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">

                                <div class="blogcard card p-3">
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-6 mb-5">
                                            <h4 class="text-center color-primary fw-bold pt-4">Learning Management and
                                                Monitoring system</h4>
                                        </div>

                                        <div class="col-lg-12 text-center">
                                            <h2 class="caseStudy_font">TECHNOLOGY USED</h2>

                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/html-5.png') }}">HTML5</div>
                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/css-3.png') }}"> CSS3</div>
                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/js.png') }}" /> JS</div>
                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/bootstrap.png') }}">BS</div>
                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/jquery.png') }}" /> Jquery</div>
                                            <div class="tech_span"><img
                                                    src="{{ asset('assets/images/caseStudy/php.png') }}"> PHP</div>

                                        </div>

                                    </div>

                                    <img style="width: 100%; height:100%" class="mb-3"
                                        src="{{ asset('assets/images/caseStudy/bigCartier.JPG') }}" alt="">
                                    <p>
                                    <p class="cartier_p">Cartier is a one-stop solution for all your training needs. It's a
                                        cloud-based
                                        software that allows a company to easily digitize and quickly upload the existing
                                        records via bulk upload. All of the training information that is needed will be in
                                        one source and can be accessed from anywhere. It automates the procedures that would
                                        otherwise take a very long time, such as determining who needs what training, when
                                        they completed it, and when it expires. One can create detailed customized reports
                                        using reporting functions to gain insight into their company's training. Although a
                                        designated person will be required to monitor the company's training, Cartier
                                        enables everyone to share the responsibility by enabling everyone to upload the
                                        records, get expiry notices immediately, and complete auto-assigned training on
                                        time.</p>
                                    <p class="cartier_p">Maintaining training records in the workplace is necessary for a
                                        company's smooth
                                        operation. Whether it’s a small or multinational company, they must remain on top of
                                        training needs and ensure that all legal obligations are satisfied. Digitizing the
                                        data reduces the amount of physical space required and saves time invested filing
                                        and locating documents. This procedure can be automated to guarantee that expiration
                                        dates are not missed and that relevant employee training is assigned. Reporting
                                        functions enable to detect any gaps or expenditures that may be addressed by an
                                        authorized employee. Cartier, which is a cloud based training record management
                                        system, simplifies the process by combining all of these critical aspects into one
                                        online system as maintaining training records of a company digitally is very
                                        essential for running a safe and productive workplace.</p>
                                    <p>&nbsp;</p>
                                    <p><strong
                                            class="cartier_subHeading">Modules</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><strong
                                            class="cartier_subHeading1">Dashboard</strong>:
                                    <p class="cartier_p">It is the main home page when logged in. One can create employee id
                                        cards just by
                                        selecting their names. A graphical representation of the training report can be seen
                                        for easy understanding where assigned employees for training and employees that
                                        attended the training are segregated and represented in visual form. Department wise
                                        number of trained employees is represented in a pie chart where the details can be
                                        viewed and can be exported to excel sheet.</p>
                                    </p>
                                    <p class="cartier_p"><br><strong class="cartier_subHeading1">Report:</strong> It
                                        includes all training records in detail where total
                                        staff in the company, pending staff, trained staff is shown along with the training.
                                    </p>
                                    <p class="cartier_p">Department wise report shows the number of training attended by the
                                        number of
                                        employees from different departments.</p>
                                    <p class="cartier_p">Department wise number of trained employees is shown and can be
                                        exported to excel
                                        sheet.</p>
                                    <p class="cartier_p"><br><strong class="cartier_subHeading1">Department:</strong> A new
                                        department can be added into the system by
                                        clicking on the add department option. This action can be also performed in bulk by
                                        downloading the department template, adding the information and then uploading the
                                        template..</p>
                                    <p class="cartier_p"><br><strong class="cartier_subHeading1">&nbsp;Designation:</strong>
                                        Different designations can be added into
                                        the system by clicking on the add designation option. This action can be also
                                        performed in bulk by downloading the designation template, adding the information
                                        and then uploading the template..</p>
                                    <p class="cartier_p"><br><strong class="cartier_subHeading1">&nbsp;Employee:</strong>
                                        View employee section keeps all the records
                                        of the employee details like their department, designation, joining date, status, ID
                                        and also one can search an employee by filtering their name, department, designation
                                        or status.</p>
                                    <p class="cartier_p">Add employee is about adding an employee details for record. It can
                                        be added by
                                        filling the details directly and submitting or can also be added in bulk by
                                        downloading the template, adding the information and uploading the template.</p>
                                    <p class="cartier_p"><br><br><strong class="cartier_subHeading1">&nbsp;Manager:</strong>
                                        It is important to designate a supervisor or
                                        administrator to oversee the training and management of records and documents for
                                        the company.&nbsp;</p>
                                    <p class="cartier_p">View manager section shows all the information about the managers
                                    </p>
                                    <p class="cartier_p">Add manager section is to add information about the manager so that
                                        it can be in the
                                        record.</p>
                                    <p class="cartier_p"><br><br><strong class="cartier_subHeading1">&nbsp;Vendor:</strong>
                                        Along with the employees of the company it is
                                        also important to keep records of the designated vendor who provides the training to
                                        the employees to gain those skills for the company. There are two categories in this
                                        section:</p>
                                    <p class="cartier_p">View Vendor: Here one can search about the vendor by their name or
                                        by their mobile
                                        number for more information about the vendor.</p>
                                    <p class="cartier_p">Add Vendor: Here one can add more vendors by filling all the
                                        information that is
                                        required along with their image- name, address, phone number, username, password and
                                        submitting it or can also be added in bulk by downloading the template, adding the
                                        information and uploading the template.</p>
                                    <p class="cartier_p"><br><br><strong
                                            class="cartier_subHeading1">&nbsp;Training:</strong> Assign training section is
                                        to assign
                                        employees for a training by selecting the department along with the date and the
                                        training.</p>
                                    <p class="cartier_p">View training section keeps all the records of the training details
                                        like the training
                                        name, vendor name which is providing the training, location and mode of training but
                                        also one can search about a training by filtering their name, vendor or mode of
                                        training.</p>
                                    <p class="cartier_p">In the add training section one can add the training name, vendor
                                        which is providing
                                        the training and the location along with the training mode which will be online or
                                        offline, the starting and ending date of the training.</p>
                                    <p class="cartier_p">It has an exam section as well where the trainees can take the test
                                        and get their
                                        results for the training they attended.</p>
                                    <p class="cartier_p"><br><br><strong class="cartier_subHeading1">&nbsp;Add Attendance:
                                        </strong>Here one can mark the attendance of
                                        the employee from different departments attending the training.</p>
                                    <p>&nbsp;</p>
                                    <p><strong class="cartier_subHeading1">Difficulties faced during the project:</strong>
                                    </p>
                                    <p>&nbsp;</p>
                                    <ul>
                                        <li><strong class="cartier_subHeading1">Difficulties faced during understanding the
                                                requirements of the
                                                client:</strong></li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p class="cartier_p">The client wanted a simple version so that it will be easier to
                                        use. Even if someone
                                        didn't have the technical idea, they can access it without facing any problems.</p>
                                    <p class="cartier_p">They wanted a personalized software which can be accessible from
                                        anywhere.</p>
                                    <p class="cartier_p">The client wanted a detailed report feature to be added against
                                        each employee with a
                                        provision of getting feedback from the manager.</p>
                                    <p><br>&nbsp;</p>
                                    <ul>
                                        <li><strong class="cartier_subHeading1">Technical Problems faced by the
                                                team:</strong></li>
                                    </ul>
                                    <p class="cartier_p">As our software was advanced, we had to make it in a simple version
                                        without any
                                        change in the features as per the requirements of the client.</p>
                                    <p class="cartier_p">We had to make an inbuilt format sheet for the clients to download
                                        and then upload in
                                        bulk as even a little change of letter may lead to rejection or non detection by the
                                        software.</p>
                                    <p class="cartier_p">Making it a personalized software rather than a general one.&nbsp;
                                    </p>
                                    <p class="cartier_p">The client wanted to add a feature where they can know about the
                                        skills and knowledge
                                        gained by the employees due to which we had to add an extra section where they can
                                        give an exam on the training they attended and get their report&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p><strong class="cartier_subHeading1">Benefits :</strong></p>
                                    <ul>
                                        <li class="cartier_p">Reports are well organized and can be easily accessed by
                                            authorized employees of
                                            the company from anywhere.</li>
                                        <li class="cartier_p">Simplifies the process by combining all of these critical
                                            aspects into one
                                            online system as maintaining training records of a company digitally.</li>
                                        <li class="cartier_p">Detailed reports about the employees of the company can be
                                            uploaded easily.</li>
                                        <li class="cartier_p">It shows visual reports quickly and easily to give an overview
                                            of training gaps.
                                        </li>
                                        <li class="cartier_p">Reduces labor as digitizing the records eliminates the need
                                            for physical space
                                            and saves administrative time on filing and locating documents.</li>
                                        <li class="cartier_p">Saves a lot of time as It automates the processes that are
                                            ordinarily very
                                            time-consuming.&nbsp;</li>
                                        <li class="cartier_p">It allows users to digitize the existing records quickly via
                                            mass upload at the
                                            same time.</li>
                                        <li class="cartier_p">Data can be stored for a longer duration without the risk of
                                            losing the
                                            information.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p><strong class="cartier_subHeading1">Conclusion :</strong></p>
                                    <p class="cartier_p">The focus of this study was to learn different aspects of this
                                        software, overcome the
                                        difficulties that were faced during the project and came up with the best accessible
                                        and user friendly operating software.</p>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <div class="divider_image">
            <img src="{{ asset('assets/images/solution.png') }}" />
        </div>

    </main><!-- End #main -->
@endsection
