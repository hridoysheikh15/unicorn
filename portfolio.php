<?php

include 'header.php'

?>

<head>
  <link rel="stylesheet" href="./asset/css/portfolio.css" />
</head>

<!-- top section -->

<div class="aboutTop">
  <div class="img-about">
    <img src="./asset/image/laptop-on-table.webp" alt="laptop-on-table" />
  </div>
  <div class="aboutTop-content">
    <div class="midTag">
      <p class="text-uppercase">Portfolio</p>
      <p class="text-capitalize">home / portfolio</p>
    </div>
  </div>
</div>

<!-- work intro -->

<div class="port-intro">
  <div class="intro-work">
    <div class="work-intro">
      <h1 class="text-uppercase">our <span>work</span></h1>
      <p>
        We create dynamic, interactive and user-friendly solutions for our
        global clientele
      </p>
    </div>
  </div>
</div>

<!-- all work with menu -->

<!-- all work menu -->

<div class="all-work container-lg">
  <div class="all-work-list">
    <div class="works-portfolio">
      <div class="works-btn">
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(0)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">all</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(1)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">web</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(2)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (mobile)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(3)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (desktop)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(4)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">app (web)</span>
          </button>
        </div>
        <div class="work-btn-list">
          <button class="work-list" onclick="getContent(5)">
            <span class="before-hover-1"></span>
            <span class="after-hover-1"></span>
            <span class="before-hover-2"></span>
            <span class="after-hover-2"></span>
            <span class="btn-text">network</span>
          </button>
        </div>
      </div>
      <div class="works-details">
        <div class="all-content-port text-center">
          <div id="port_list0">
            <div class="port-content">
              <!-- <p>Total Work</p> -->
            </div>
          </div>
          <div id="port_list1">
            <div class="port-content">
              <div class="ueims text-start">
                <h3 class="text-capitalize">UEIMS</h3>
                <p>
                  "Unicorn Education Management System" is a comprehensive
                  educational software solution, streamlining administrative
                  tasks, enhancing communication, and improving learning
                  outcomes. With user-friendly interfaces and robust features,
                  it empowers educators, students, and parents for a more
                  efficient educational experience.
                </p>
                <ul>
                  <li>Comprehensive educational software for institutions.</li>
                  <li>
                    Optional modules for payroll and provident fund management.
                  </li>
                  <li>Leave and attendance management.</li>
                  <li>Recruitment management.</li>
                  <li>Reduce turnaround time.</li>
                  <li>Automate information collection and processing.</li>
                  <li>
                    Reduce overheads associated with manual record management
                    and storage.
                  </li>
                  <li>Streamlines administrative processes.</li>
                  <li>Enhances communication and learning outcomes.</li>
                  <li>Reduces overhead costs.</li>
                </ul>
              </div>
              <div class="e-learning text-start">
                <h3 class="text-capitalize">unicorn learning suite</h3>
                <p>
                  E-Learning is developing a new dimension in learning and
                  training systems. Unicorn has developed a complete and robust
                  E-Learning system to ensure its support towards ELearning
                  process. Unicorn E-Learning Suite is a secured web based
                  complete training and learning system with flexible and
                  user-friendly interface. It is designed to fit any size
                  educational institute. It will help to…
                </p>
                <ul>
                  <li>
                    Simplify complex distant training and learning workflows.
                  </li>
                  <li>Helps to improve educational excellence.</li>
                  <li>Manage the entire distant learning process with ease.</li>
                  <li>
                    Suitable for 100% online classes as well as supplementing
                    face-to-face
                  </li>
                  <li>
                    Course management including complete lecture management,
                    content management (Text, Audio, Video, Slides etc),
                    workshop management, assessment management, lesson
                    management.
                  </li>
                  <li>
                    Online query and counseling management including chat
                    management.
                  </li>
                  <li>Online grading management.</li>
                  <li>Virtual library management.</li>
                  <li>
                    Easy to install on almost any platform that supports PHP.
                  </li>
                </ul>
              </div>
              <div class="totalhrd text-start">
                <h3 class="text-capitalize">TotalHRD</h3>
                <p>
                  Effective management of human resources is essential for
                  success regardless of the size or type of the enterprise.
                  Processing large amounts of data required for integrated and
                  efficient management becomes problematic if done manually or
                  through stand-alone system.
                </p>
                <p>
                  TotalHRD is a web based HR management solution to manage human
                  resource operations smartly. It comes with optional payroll
                  and provident fund modules.
                </p>
                <ul>
                  <li>Simplify complex HR management workflows.</li>
                  <li>Payroll management.</li>
                  <li>Leave and attendance management.</li>
                  <li>Recruitment management.</li>
                  <li>Reduce turnaround time.</li>
                  <li>Automate information collection and processing.</li>
                  <li>
                    Reduce overheads associated with manual record management
                    and storage.
                  </li>
                  <li>Facilitate career development planning.</li>
                  <li>
                    Automated analytical tools and real-time information
                    updates.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="port_list2">
            <div class="port-content">
              <div class="gla text-start">
                <h3 class="text-capitalize">GLA - Garment Lot Auction</h3>
                <p>
                  When the garment factories receives huge orders from foreign
                  companies they generally make more garments than the order
                  requirements so that they can maintain the export quality. But
                  when the order is complete the left over garments of the
                  factories are sold as lot. Currently the division of these
                  lots to local market is not supervised and thus the market is
                  not properly maintained.
                <ul>
                  <li>
                    The buying/selling process is shady.
                  </li>
                  <li>
                    Regret for not being able to participate in buying items.
                  </li>
                </ul>
                </p>
                <p>
                  We wanna make a online system/ app where the whole process can be made much easier.
                </p>
                <ul>
                  <li>
                    <strong>Live Auction Experience:</strong> The app provides a dynamic and engaging live auction
                    experience where users
                    can view high-quality images and descriptions of garments in real-time. They can see other bidders'
                    activity and place their own bids as the auction unfolds.
                  </li>
                  <li>
                    <strong>Diverse Garment Selection:</strong> The app showcases a diverse range of clothing products,
                    including designer wear, vintage pieces, casual attire, and more. Users have access to a broad
                    selection of garments to suit their preferences and styles.
                  </li>
                  <li>
                    <strong>Bid Responsively:</strong> Users can place bids with just a few taps, making it easy to
                    participate in auctions. The app also features an intuitive bidding system that ensures fair
                    competition and an exciting atmosphere.
                  </li>
                  <li>
                    <strong>User Profiles:</strong> Each user has a customizable profile, allowing them to save favorite
                    garments, track their bidding history, and manage their personal information securely.
                  </li>
                  <li>
                    <strong>Real-time Notifications:</strong> Users receive real-time notifications to stay updated on
                    auction status, outbid alerts, and auction results. This keeps them engaged and informed throughout
                    the bidding process.
                  </li>
                  <li>
                    <strong>Auction Scheduling:</strong> The app provides a schedule of upcoming garment auctions,
                    helping users plan their participation and avoid missing out on their favorite items.
                  </li>
                  <li>
                    <strong>Customer Support:</strong> A dedicated customer support team is available to assist users
                    with any questions or concerns, ensuring a positive shopping experience.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="port_list3">
            <div class="port-content">
              <div class="shmu text-start">
                <h3 class="text-capitalize">
                  Sheikh Hasina medical university
                </h3>
                <p>
                  The Medical University Management Software is a comprehensive and advanced software solution designed
                  to streamline the operations and enhance the efficiency of medical universities. This summary focuses
                  on its implementation at "Sheikh Hasina Medical University," showcasing how the software has
                  revolutionized administrative and academic functions for the institution.
                </p>
                <ul>
                  <li>
                    <strong>Student Management:</strong> The software offers robust student management capabilities,
                    enabling Sheikh Hasina Medical University to efficiently manage student records, admissions, and
                    enrollment. It supports digital student profiles and academic progress tracking.
                  </li>
                  <li>
                    <strong>Course and Curriculum Management:</strong> The software assists in creating, updating, and
                    managing courses and curricula. It enables the university to adapt to changing educational
                    requirements and standards seamlessly.
                  </li>
                  <li>
                    <strong>Faculty Management:</strong> Sheikh Hasina Medical University can easily handle faculty
                    recruitment, scheduling, and performance evaluations through the software. It also helps in
                    maintaining faculty profiles, qualifications, and research activities.
                  </li>
                  <li>
                    <strong>Attendance and Examination Management:</strong> The software automates attendance tracking
                    and examination scheduling, reducing administrative workload. It supports online examinations,
                    grading, and result management.
                  </li>
                  <li>
                    <strong>Research and Publications:</strong> The software aids in managing research projects,
                    publications, and grants. It tracks research progress, facilitates collaboration among researchers,
                    and maintains an extensive research database.
                  </li>
                  <li>
                    <strong>Financial Management:</strong> With integrated financial modules, the software allows Sheikh
                    Hasina Medical University to manage budgets, grants, fees, and expenses more effectively, ensuring
                    financial transparency and compliance.
                  </li>
                  <li>
                    <strong>Hospital and Clinical Management:</strong> For institutions with medical facilities, the
                    software streamlines hospital operations, patient records, and clinical scheduling. It enhances the
                    quality of patient care and services.
                  </li>
                  <li>
                    <strong>Alumni and Alumni Relations:</strong> The software includes an alumni management system that
                    helps Sheikh Hasina Medical University maintain contact with former students and engage them in
                    various university activities.
                  </li>
                  <li>
                    <strong>Reporting and Analytics:</strong> Robust reporting and analytics tools provide insights into
                    various university functions, allowing administrators to make data-driven decisions and optimize
                    resource allocation.
                  </li>
                  <li>
                    <strong>Security and Compliance:</strong> The software ensures data security and regulatory
                    compliance, safeguarding sensitive information and maintaining the confidentiality of student and
                    faculty records.
                  </li>
                  <li>
                    <strong>Customization and Scalability:</strong> The software can be tailored to Sheikh Hasina
                    Medical University's specific needs and scaled as the institution grows.
                  </li>
                </ul>
                <p>
                  Overall, the Medical University Management Software has transformed the way Sheikh Hasina Medical
                  University manages its administrative, academic, and healthcare operations. It enhances efficiency,
                  collaboration, and data accuracy, ultimately contributing to the institution's reputation for
                  excellence in medical education and research.
                </p>
              </div>
              <div class="freight-forwarding text-start">
                <h3 class="text-capitalize">
                  Logimate Freight Forwarding Manager
                </h3>
                <p>
                  Due to the complex nature of freight forwarding business, it’s essential for such companies to
                  have good supply chain management software for achieving success. Considerable
                  amount of data has to be transferred between different parties for fast efficient operation.
                  Logimate Supply Chain Manager helps the companies in automating and speeding up their
                  entire business process and reduces costs to some great extent.
                </p>
                <ul>
                  <li>
                    Simplify operational works which includes Job and PO management, cargo
                    receiving and consolidation management, container and warehousing
                    management, track and trace, agent, shipper, consignee and local buyer
                    management etc.
                  </li>
                  <li>
                    Import operations management for both ocean and air services.
                  </li>
                  <li>
                    Accounting features with different kinds of invoicing options.
                  </li>
                  <li>
                    Generate various reports including customized reports.
                  </li>
                  <li>
                    Web Portal for customers and administration.
                  </li>
                  <li>
                    Provide notifications and alerts via email and other methods.
                  </li>
                  <li>
                    Reduce turnaround time.
                  </li>
                  <li>
                    Automation of data collection and processing.
                  </li>
                  <li>
                    Ensure business integrity by imposing access control levels.
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div id="port_list4">
            <div class="port-content">
              <div class="warehouse text-start">
                <h3 class="text-capitalize">
                  Thakurgaon warehouse management system
                </h3>
                <p>
                  The Thakurgaon Warehouse Management System is a robust and integrated software solution designed to
                  efficiently manage food items and vagitable stored in various warehouses, storehouses, and godowns
                  overseen by the District Collector (DC). This summary outlines how the system has revolutionized food
                  storage and distribution in the district.
                </p>
                <ul>
                  <li>
                    <strong>Centralized Inventory Management:</strong> The system offers a centralized platform to track
                    and manage the inventory of all food items stored in multiple warehouses, godowns, and storehouses
                    within the district. This ensures better control and visibility.
                  </li>
                  <li>
                    <strong>Real-time Monitoring:</strong> The DC and authorized personnel can monitor inventory levels,
                    stock movements, and expiration dates in real time, allowing for timely restocking and preventing
                    food wastage.
                  </li>
                  <li>
                    <strong>Allocation and Distribution:</strong> The system streamlines the allocation of food items to
                    different areas or beneficiaries within the district. It facilitates fair and efficient distribution
                    to those in need, especially during emergencies or relief efforts.
                  </li>
                  <li>
                    <strong>Inventory Optimization:</strong> The system employs advanced algorithms to optimize
                    inventory levels and reduce carrying costs. It can forecast demand, suggesting when and where to
                    distribute food items.
                  </li>
                  <li>
                    <strong>Vendor Management:</strong> It helps manage relationships with food suppliers, ensuring
                    timely deliveries and quality control. Vendor performance data can be tracked for evaluation and
                    compliance.
                  </li>
                  <li>
                    <strong>Security and Access Control:</strong> The system maintains strict access controls to
                    safeguard sensitive food-related data and transaction records. Only authorized personnel can access
                    and make changes to the system.
                  </li>
                  <li>
                    <strong>Reporting and Analytics:</strong> The system generates detailed reports and analytics on
                    inventory status, distribution patterns, and other key metrics, aiding the DC in making informed
                    decisions and allocating resources efficiently.
                  </li>
                  <li>
                    <strong>Compliance and Audit Trails:</strong> The software maintains thorough audit trails, ensuring
                    compliance with regulations and providing transparency for any auditing requirements.
                  </li>
                  <li>
                    <strong>Mobile Accessibility:</strong> The system can be accessed via mobile devices, allowing field
                    agents and inspectors to report on inventory and distribution activities from remote locations.
                  </li>
                  <li>
                    <strong>Emergency Response Capability:</strong> During emergencies, the system can quickly redirect
                    food resources to affected areas, ensuring a swift and efficient response to disaster situations.
                  </li>
                </ul>
                <p>
                  In summary, the District Collector's Warehouse Management System is a pivotal tool for managing and
                  optimizing food item storage and distribution across the district. By enhancing transparency,
                  accuracy, and control over food resources, the system enables the District Collector to better serve
                  the needs of the community, particularly during times of crisis and in regular food distribution
                  programs.
                </p>
              </div>
              <div class="logistic-manager text-start">
                <h3 class="text-capitalize">
                  Logimate Logistics Manager
                </h3>
                <p>
                  Due to the complex nature of the business, maintaining a logistics business is never easy.
                  Good logistic management software comes handy in this purpose. Our Logimate Logistics
                  Manager is a complete solution for maintaining a logistic business.
                </p>
                <ul>
                  <li>
                    Manage daily operations.
                  </li>
                  <li>
                    Vehicle management.
                  </li>
                  <li>
                    Vehicle tracking.
                  </li>
                  <li>
                    Order management.
                  </li>
                  <li>
                    Managing accounting for the business.
                  </li>
                </ul>
              </div>
              <div class="finamate text-start">
                <h3 class="text-capitalize">
                  Finamate
                </h3>
                <p>
                  Finamate is a web based 3 tier accounting solution. Different business follows different ways
                  for accounting. It’s never easy to implement the perfect accounting solution required for
                  your company. Flexible and robust features in FINAMATE made it easy to implement in almost
                  every business.
                </p>
                <ul>
                  <li>
                    Simplify complex accounting operations of a company by having different
                    modules for accounts receivable, accounts payable, inventory, manufacturing,
                    bank transactions, general ledger etc.
                  </li>
                  <li>
                    Reduce turnaround time.
                  </li>
                  <li>
                    Automation of data collection and processing.
                  </li>
                  <li>
                    Generate various reports including customized reports.
                  </li>
                  <li>
                    Ensure business integrity by imposing access control levels.
                  </li>
                  <li>
                    Manage different kinds of business with great customization feature.
                  </li>
                  <li>
                    Generate different kinds of reports required by a business.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="port_list5">
        <div class="port-content">
          <div id="port_list4">
            <div class="port-content">
              <div class="net-dev text-start">
                <h3 class="text-capitalize">
                  Network Design and Deployment
                </h3>
                <p>
                  Our Network Planning Team gives customers a complete understanding of the performance
                  and reliability of their networks. We ensure that your networks deliver profit for you, by offering
                  services that range from planning and designing a network to its evaluation and health
                  assessment. We understand that networks that are carefully designed and planned reduce
                  capital expenditures and deliver the best return on your investments
                </p>
                <p>
                  We provide detailed network specifications, network coverage maps, and special
                  installation requirements together with a complete budgetary plan with each network
                  design. We provide the following services for you.
                </p>
                <ul>
                  <li>
                    Planning and setting up LAN, WLAN and other network infrastructure.
                  </li>
                  <li>
                    Network router and switches configurations and external connectivity.
                  </li>
                  <li>
                    Point to point and point to multipoint VPN installation and maintenance.
                  </li>
                  <li>
                    Application, web and mail server configuration.
                  </li>
                  <li>
                    Linux based traffic monitoring, bandwidth shaping/management etc.
                  </li>
                </ul>
              </div>
              <div class="seq-dev text-start">
                <h3 class="text-capitalize">
                  Network Security Design and Auditing
                </h3>
                <p>
                  Unicorn network security team can help you securing your valuable network by auditing
                  valuable network resources, providing a comprehensive plan for security and deploy security
                  solutions in important points of your network. We provide managed network security services
                  along with security consulting services. Our network security experts are always ready to help
                  you.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- use tool for dev -->

<div class="port-tool">
  <div class="all-tool">
    <div class="port-intro">
      <div class="intro-work">
        <div class="work-intro">
          <h1 class="text-uppercase">use's populer <span>tools</span></h1>
          <p>
            We create dynamic, interactive and user-friendly solutions for our
            global clientele
          </p>
        </div>
      </div>
    </div>
    <div class="all-tool-list container-lg">
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/bs5.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Bootstrap V5.2.3</h5>
          <p>Powered by Bootstrap most latest version v5.2.3</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/jquery.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Latest Jquery</h5>
          <p>Template is fully customized according to latest Jquery.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/responsive.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Fully Responsive</h5>
          <p>100% responsive layout using default Bootstrap grid layout.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/customize.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Fully Customizable</h5>
          <p>Control easily the size by using default Bootstrap grid layout.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/easy use.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Easy To Use</h5>
          <p>Fully documention and premium support 24/7.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/touch.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Touch Enabled</h5>
          <p>Designed specially to boost mobile browsing experience.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/document.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Well Documented</h5>
          <p>A fully detailed documentation is always there .</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/browser.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Cross Browser</h5>
          <p>This template works perfectly with all available browsers.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/web.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Creative Modern Design</h5>
          <p>A large range of options features is available.</p>
        </div>
      </div>
      <div class="tools-item">
        <div class="toolsImg">
          <div class="tool-img-box">
            <img src="./asset/image/font.webp" alt="" />
          </div>
        </div>
        <div class="toolsDetail">
          <h5>Google Fonts</h5>
          <p>
            Google fonts or upload custom fonts, set sizes, style, and much
            more.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php

include 'footer.php'

?>