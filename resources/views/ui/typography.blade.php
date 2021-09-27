{{-- Extends layout --}}
@extends('layout.default')



{{-- Content --}}
@section('content')

<div class="container-fluid">
  <!-- Add Order -->
  <div class="modal fade" id="addOrderModalside">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Event</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label class="text-black font-w500">Event Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Event Date</label>
              <input type="date" class="form-control">
            </div>
            <div class="form-group">
              <label class="text-black font-w500">Description</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javascript:void(0)">Bootstrap</a></li>
      <li class="breadcrumb-item active"><a href="javascript:void(0)">ui-typography</a></li>
    </ol>
  </div>
  <!-- row -->
  
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row justify-content-between">
            <div class="col-lg-4 mb-lg-0 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Typography</h4>
                <h6>Use tags <code>h1 to h6</code> for get desire heading.</h6>
              </div>
              <div class="card-content">
                <h1>h1. Bootstrap heading</h1>
                <h2>h2. Bootstrap heading</h2>
                <h3>h3. Bootstrap heading</h3>
                <h4>h4. Bootstrap heading</h4>
                <h5>h5. Bootstrap heading</h5>
                <h6>h6. Bootstrap heading</h6>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Paragraph with justify</h4>
                <p>Use tags <code>text-justify</code> for get desire paragraph.
                </p>
              </div>
              <div class="card-content">
                <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Alignment text</h4>
                <p>Use tags <code>text-left, text-center, text-right</code> for get desire text.</p>
              </div>
              <div class="card-content">
                <p class="text-left">Left aligned text on all viewport sizes.</p>
                <p class="text-center">Center aligned text on all viewport sizes.</p>
                <p class="text-right">Right aligned text on all viewport sizes.</p>
              </div>
            </div>
            <div class="col-12">
              <hr>
              <br>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">View port text</h4>
                <p>Use tags <code>text-sm-left, text-md-left, text-lg-left, text-xl-left</code> for get desire text.</p>
              </div>
              <div class="card-content">
                <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
                <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
                <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
                <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Font weight and italics</h4>
                <p>Use tags <code>, font-weight-normal, font-weight-italic</code> for get desire text.</p>
              </div>
              <div class="card-content">
                <p class="">Bold text.</p>
                <p class="font-weight-normal">Normal weight text.</p>
                <p class="font-italic">Italic text.</p>
              </div>
            </div>
            <div class="col-12">
              <hr>
              <br>
            </div>
            <div class="col-lg-4">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Text colors</h4>
                <p>Use tags below class for get desire text.</p>
              </div>
              <div class="card-content">
                <p class="text-muted">This is an example of muted text. Add class<code>text-muted</code></p>
                <p class="text-primary">This is an example of primary text. Add class<code>text-primary</code></p>
                <p class="text-success">This is an example of success text. Add class<code>text-success</code></p>
                <p class="text-info">This is an example of info text. Add class<code>text-info</code></p>
                <p class="text-warning">This is an example of warning text. Add class<code>text-warning</code></p>
                <p class="text-danger">This is an example of danger text. Add class<code>text-danger</code></p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Address</h4>
                <p>Use <code>address</code> for get desire address.</p>
              </div>
              <div class="card-content">
                <address>
                  <strong>Twitter, Inc.</strong>
                  <br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br><abbr title="Phone">P:</abbr>(123) 456-7890
                </address>
                <address>
                  <strong>George Belly</strong>
                  <br>
                  <a href="mailto:#">info@example.com</a>
                </address>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-4">
                <h4 class="card-title card-intro-title">Blockquotes</h4>
                <p>Use <code>blockquote</code> for get desire address.</p>
              </div>
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</blockquote>
              <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
                <small> - Someone famous in <cite title="Source Title">Source Title</cite></small>
              </blockquote>
            </div>
            <div class="col-12">
              <hr>
              <br>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Ol Listing</h4>
                <p>Use tags <code>ol > li</code> for get desire ol list.</p>
              </div>
              <ol>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
              </ol>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Ul Listing</h4>
                <p>Use tags <code>ul > li</code> for get desire ol list.</p>
              </div>
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
              </ul>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Description Text</h4>
                <p>Use tags <code>dl > dt</code> for get desire ol list.</p>
              </div>
              <dl>
                <dt>Standard Description List</dt>
                <dd>Description Text</dd>
                <dt>Description List Title</dt>
                <dd>Description List Text</dd>
              </dl>
            </div>
            <div class="col-12">
              <hr>
              <br>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Fancy Listing 1</h4>
                <p>Use class <code>list-icons</code> to ul for get desire ol list.</p>
              </div>
              <ul class="list-icons">
                <li><span class="align-middle mr-2"><i class="ti-angle-right"></i></span> Lorem ipsum dolor sit amet</li>
                <li><span class="align-middle mr-2"><i class="ti-angle-right"></i></span> Consectetur adipiscing elit</li>
                <li><span class="align-middle mr-2"><i class="ti-angle-right"></i></span> Integer molestie lorem at massa</li>
              </ul>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Fancy Listing with href</h4>
                <p>Use class <code>list-icons</code> to ul for get desire ol list.</p>
              </div>
              <ul class="list-icons">
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-check text-info"></i></span> Lorem ipsum dolor sit amet</a></li>
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-check text-info"></i></span>Consectetur adipiscing elit</a></li>
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-check text-info"></i></span>Integer molestie lorem at massa</a></li>
              </ul>
            </div>
            <div class="col-lg-4 mb-3">
              <div class="mb-4">
                <h4 class="card-title card-intro-title mb-1">Fancy Listing with href</h4>
                <p>Use class <code>list-icons</code> to ul for get desire ol list.</p>
              </div>
              <ul class="list-icons">
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-chevron-right"></i></span> Lorem ipsum dolor sit amet</a></li>
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-chevron-right"></i></span>Consectetur adipiscing elit</a></li>
                <li><a href="javascript:void(0)"><span class="align-middle mr-2"><i class="fa fa-chevron-right"></i></span>Integer molestie lorem at massa</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection