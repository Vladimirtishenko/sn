if (document.querySelector(".party-for-slider-images")) {
    var all;
    var slider = {
        item: document.querySelectorAll(".party-liders"),
        showImg: document.querySelectorAll(".party-outer-content-photo"),
        listen: function() {
            this.runtime();
            for (var i = this.item.length - 1; i >= 0; i--) {
                this.item[i].addEventListener("click", function(e) {
                    e.preventDefault();
                    clearInterval(all);
                    var data = this;
                    var thisDate = data.getAttribute("data-item");
                    if (this.classList.contains("party-active-lider")) {
                        return;
                    } else {
                        slider.removeClass("party-active-lider", slider.item);
                        data.classList.add("party-active-lider");
                        var gs = document.querySelectorAll(".party-outer-content-photo");
                        for (var j = gs.length - 1; j >= 0; j--) {
                            var showEl = gs[j];
                            var id = parseInt(showEl.id);
                            if (thisDate == id) {
                                slider.removeStyle(slider.showImg);
                                showEl.style.cssText = "display: block"
                                showEl.classList.add("fadeIn");
                            }
                        };
                        slider.slideactivate(thisDate);
                        slider.runtime();
                    }
                });
            }
        },
        removeClass: function(classie, elements) {
            for (var i = elements.length - 1; i >= 0; i--) {
                if (elements[i].classList.contains(classie)) {
                    elements[i].classList.remove(classie);

                    break;
                }

            };
        },
        removeStyle: function(elements) {
            for (var i = elements.length - 1; i >= 0; i--) {
                if (elements[i].getAttribute("style")) {
                    elements[i].removeAttribute("style");
                    elements[i].classList.remove("fadeIn");
                    break;
                }

            };
        },
        slideactivate: function(thisDate) {
            var gs = document.querySelectorAll(".party-outer-content-photo");
            for (var j = gs.length - 1; j >= 0; j--) {
                var showEl = gs[j];
                var id = parseInt(showEl.id);
                if (thisDate == id) {
                    slider.removeStyle(slider.showImg);
                    showEl.style.cssText = "display: block"
                    showEl.classList.add("fadeIn");
                }
            };
        },
        runtime: function() {
            all = setTimeout(function() {
                var thisCheck = document.querySelector(".party-active-lider");
                slider.removeClass("party-active-lider", slider.item);
                if (!thisCheck.nextElementSibling) {
                    var thisDate = slider.item[0].getAttribute("data-item");
                    slider.slideactivate(thisDate);
                    slider.item[0].classList.add("party-active-lider");
                } else {
                    var thisDate = thisCheck.nextElementSibling.getAttribute("data-item");
                    slider.slideactivate(thisDate);
                    thisCheck.nextElementSibling.classList.add("party-active-lider");
                }
                slider.runtime();
            }, 8000)
        }
    }

    slider.listen();
}

if (document.querySelector(".party-tabs")) {
    var tabs = {
        gen: document.querySelector(".party-tabs").children,
        block: document.querySelectorAll(".party-item-choise"),
        clickOnTabs: function() {
            for (var i = tabs.gen.length - 1; i >= 0; i--) {
                tabs.gen[i].addEventListener("click", function(e) {
                    e.preventDefault();
                    var attr = this.getAttribute("href");
                    var newAttr = attr.substr(1);
                    tabs.hideElements();
                    tabs.showElements(newAttr);
                    tabs.removeActiveClass(e.target)
                });
            };
        },
        hideElements: function() {
            for (var i = tabs.block.length - 1; i >= 0; i--) {
                tabs.block[i].style.display = "none";
            }
        },
        showElements: function(attr) {

            for (var i = tabs.block.length - 1; i >= 0; i--) {
                if (tabs.block[i].getAttribute("id") === attr) {
                    tabs.block[i].style.display = "block";
                    break;
                }
            };
        },
        removeActiveClass: function(trg) {
            if (trg.classList.contains("party-tabs-active")) return;
            document.querySelector(".party-tabs-active").classList.remove("party-tabs-active");
            trg.classList.add("party-tabs-active");
        }
    }

    tabs.clickOnTabs();
}


if (document.querySelector(".party-breadcrumps")) {
    var breadcrumbs = {
        genElement: document.querySelector(".party-breadcrumps"),
        slices: function() {
            var t = this.genElement.lastElementChild.innerHTML;

            if (t.length > 70) {
                var newT = t.substring(70, -70);
                this.genElement.lastElementChild.innerHTML = newT + '...';
            }
        }
    }

    breadcrumbs.slices();

}

if (document.querySelectorAll(".party-map-area")) {

    var map_active = false;

    var map = {
        genElement: document.querySelectorAll(".obl"),
        imgElem: document.querySelectorAll(".region"),
        actions: function() {
            for (var i = this.genElement.length - 1; i >= 0; i--) {
                this.genElement[i].addEventListener("mouseover", function(e) {
                    var id = "#image-id-" + this.getAttribute("id");
                    map.hoverIn(id, e.target, e, this.getAttribute("id"));
                });
                this.genElement[i].addEventListener("mouseout", function(e) {
                    var id = "#image-id-" + this.getAttribute("id");
                    map.hoverOut(id, e.target);
                });

                this.genElement[i].addEventListener("click", function() {
                    var id = "#image-id-" + this.getAttribute("id");
                    map.clicky(id, this.getAttribute("id"));
                });
            };
           
        },
        hoverIn: function(id, a, el,nativeId) {
            if (document.querySelector(id).classList.contains("active-map-area")) {
                return;
            }
            document.querySelector(id).style.cssText = "display: block";
            var cE = document.createElement('span');
            cE.style.cssText = "position: absolute; display: inline-block; background: rgba(93,107,116,.8); font-family: GothamProNarrowBold; font-size: 15px; padding: 10px; color: #fff";
            var gEl = document.querySelector(".party-map-regions-general");
            var alt = document.querySelector(id);
            alt.getAttribute("alt");
            var newId = id.slice(1);
            var elId = "tool-"+newId;
            cE.classList.add(elId);
            cE.innerHTML = alt.getAttribute("alt");
            gEl.appendChild(cE);

            gEl.addEventListener("mousemove", function(e){
                 var x = e.layerX==undefined?e.offsetX:e.layerX;
                 var y = e.layerY==undefined?e.offsetY:e.layerY;
                cE.style.left = x+20 + 'px';
                cE.style.top = y-20 + 'px';
            })
            
        },
        hoverOut: function(id, a) {
            if (document.querySelector(id).classList.contains("active-map-area")) {
                return;
            }

            document.querySelector(id).style.display = "none";
            var gEl = document.querySelector(".party-map-regions-general");
            var newId = id.slice(1);
            var elId = ".tool-"+newId;
            var alt = document.querySelector(elId);
            if(alt){
            gEl.removeChild(alt);
            }
        },
        clicky: function(id, nativeId) {
            if (map_active) {
                document.querySelector(map_active).style.display = "none";
                document.querySelector(map_active).classList.remove("active-map-area");
            }
            var gEl = document.querySelector(".party-map-regions-general");
            var newId = id.slice(1);
            var elId = ".tool-"+newId;
            var alt = document.querySelector(elId);
            gEl.removeChild(alt);

            var nEl = document.querySelector(id);
            var Left = parseInt(getComputedStyle(nEl).getPropertyValue("left"));
            var Top = parseInt(getComputedStyle(nEl).getPropertyValue("top"));
            var W = parseInt(getComputedStyle(nEl).getPropertyValue("width")) / 2;
            var H = parseInt(getComputedStyle(nEl).getPropertyValue("height")) / 2;
            var lW = 46 / 2;
            var lH = 77 / 1.3;
            nEl.style.cssText = "display: block; opacity: .3";
            nEl.classList.add("active-map-area");
            map_active = id;
            document.querySelector(".party-logo-for-map").style.cssText = "left: " + ((W - lW) + Left) + "px; top: " + ((H - lH) + Top) + "px";


            var preloader = document.querySelector(".party-preloader");
            preloader.style.display = "block";

            var formData = new FormData();
            formData.append('id', nativeId);
            var xhr = map.helperXhr();
            
            xhr.onreadystatechange = function(){
               if(xhr.status == 200 && xhr.readyState==4){
                  var query = xhr.responseText; 
                  var block = document.querySelector(".party-outer-revie");
                  var remove = document.querySelector(".party-remove-block");
                  block.removeChild(remove)
                  block.insertAdjacentHTML('beforeEnd', query);
                  preloader.style.display = "none";
                  setTimeout(map.clickOnTabs, 2000);
            }
        }

            xhr.open('POST', '/site/getRegion', true);
            xhr.send(formData);
        },
        helperXhr: function(){
              var xmlhttp;
              try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
              } catch (e) {
                try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                  xmlhttp = false;
                }
              }
              if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                xmlhttp = new XMLHttpRequest();
              }
              return xmlhttp;
        },
        clickOnTabs: function() {
            var gen =  document.querySelector(".party-tabs").children;
            for (var i = gen.length - 1; i >= 0; i--) {
                gen[i].addEventListener("click", function(e) {
                    e.preventDefault();
                    var attr = this.getAttribute("href");
                    var newAttr = attr.substr(1);
                    map.hideElements();
                    map.showElements(newAttr);
                    map.removeActiveClass(e.target)
                });
            };
        },
        hideElements: function() {
            var block = document.querySelectorAll(".party-item-choise");
            for (var i = block.length - 1; i >= 0; i--) {
                block[i].style.display = "none";
            }
        },
        showElements: function(attr) {
            var block = document.querySelectorAll(".party-item-choise");
            for (var i = block.length - 1; i >= 0; i--) {
                if (block[i].getAttribute("id") === attr) {
                    block[i].style.display = "block";
                    break;
                }
            };
        },
        removeActiveClass: function(trg) {
            if (trg.classList.contains("party-tabs-active")) return;
            document.querySelector(".party-tabs-active").classList.remove("party-tabs-active");
            trg.classList.add("party-tabs-active");
        }

    }

    map.actions();
    
}

var modal = {
    what: document.querySelectorAll(".onloadModal"),
    closes: document.querySelector(".party-close-icon"),
    actions: function() {
        for (var i = this.what.length - 1; i >= 0; i--) {
            this.what[i].addEventListener("click", function() {
                modal.open(this);
            });
        };
        this.closes.addEventListener("click", function() {
            modal.close(this);
        });

    },
    open: function(then) {
        var elem = document.querySelector(".party-modal-block");
        var title = elem.getElementsByTagName("h1")[0];
        var description = elem.querySelector(".scroller");
        var TextareaField = elem.getElementsByTagName("textarea")[0].nextElementSibling;
        this.sendForm(then, elem, title, description, TextareaField);

    },
    close: function(then) {
        var elem = document.querySelector(".party-modal-block");
        elem.classList.add("fadeOut");
        setTimeout(function() {
            elem.style.display = "none";
            elem.classList.remove("fadeOut");
            elem.style.opacity = "0"
        }, 2000)

    },
    sendForm: function(then, elem, title, description, TextareaField) {

        var formData = new FormData();
        formData.append('username', then.getAttribute("data-attr"));
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '/site/getModal', false);
        xhr.send(formData);
        if (xhr.status != 200) {
            return;
        } else {
            var modal = JSON.parse(xhr.responseText);
            title.innerHTML = modal.title;
            description.innerHTML = modal.text;
            TextareaField.innerHTML = modal.TextareaFiled;
            elem.style.display = "block";
            elem.classList.add("fadeIn");
            setTimeout(function() {
                elem.classList.remove("fadeIn");
                elem.style.opacity = "1";
                name(then.getAttribute("data-numder"))
            }, 2000)
        }

    }
}

modal.actions();





var myScroll, lengthEl = document.querySelectorAll(".wrapper").length;


for (var i = 0; i < lengthEl - 1; i++) {
    name(i);
}


function name(is) {
    myScroll = new IScroll('#wrapper' + is, {
        scrollbars: true,
        mouseWheel: true,
        interactiveScrollbars: true,
        shrinkScrollbars: 'scale',
    });
};



/*var formValidation = {
    formse: document.getElementById("modal-window"),
    action: function(){
        this.formse.addEventListener("submit", function(event){
            formValidation.inputsRequired();
        })
    },
    inputsRequired: function(){
        var input = this.formse.getElementsByTagName("input");
        for (var i = 0; i <= input.length; i++) {
            if(input[i].value){input[i].removeAttribute("style"); continue;}
            else{
               input[i].style.background = "#D08D8D";
            }
            if(input[i].getAttribute("type") === "email"){
                input[i].addEventListener("keypress",function(){formValidation.emailValidation(this, this.value, this.nextElementSibling)})
                formValidation.emailValidation(input[i], input[i].value, input[i].nextElementSibling)
            }
            
        };
    }, 
    emailValidation: function(then, val, next) {
        var reg = /\b^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{1,3}$\b/;

        if(reg.test(val)){
            then.removeAttribute("style");
            next.removeAttribute("style");
        }
        else{
            next.style.color = "#D08D8D";
            then.style.background = "#D08D8D";
        }
    }
}

formValidation.action();*/
